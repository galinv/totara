<?php
/*
 * This file is part of Totara LMS
 *
 * Copyright (C) 2010-2012 Totara Learning Solutions LTD
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Aaron Barnes <aaron.barnes@totaralms.com>
 * @package totara
 * @subpackage totara_core/dialogs
 */

defined('TOTARA_DIALOG_SEARCH') || die();

require_once("{$CFG->dirroot}/totara/core/dialogs/search_form.php");
require_once("{$CFG->dirroot}/totara/core/dialogs/dialog_content_hierarchy.class.php");
require_once($CFG->dirroot . '/totara/core/searchlib.php');

global $DB, $OUTPUT;

// Get parameter values
$query      = optional_param('query', null, PARAM_TEXT); // search query
$page       = optional_param('page', 0, PARAM_INT); // results page number
$searchtype = $this->searchtype;

// Trim whitespace off search query
$query = urldecode(trim($query));

// Clean query to remove xss vulnerabilities
// urlencoded parameters will be missed by standard optional_param cleaning, so need to double-check after decoding
// e.g. a urlencoded <script> in the query will appear to optional_param as %3Cscript%3E and be ignored
$query = clean_param($query, PARAM_TEXT);

// This url
$data = array(
    'search'        => true,
    'query'         => urlencode($query),
    'searchtype'    => $searchtype,
    'page'          => $page
);
$thisurl = new moodle_url(strip_querystring(qualified_me()), array_merge($data, $this->urlparams));

// Extra form data
$formdata = array(
    'hidden'        => $this->urlparams,
    'query'         => $query,
    'searchtype'    => $searchtype
);


// Generate SQL
// Search SQL information
$search_info = new stdClass();
$search_info->id = 'id';
$search_info->fullname = 'fullname';
$search_info->sql = null;
$search_info->params = null;

/**
 * Use whitelist for table to prevent people messing with the query
 * Required variables from each case statement:
 *  + $search_info->id: Title of id field (defaults to 'id')
 *  + $search_info->fullname: Title of fullname field (defaults to 'fullname')
 *  + $search_info->sql: SQL after "SELECT .." fragment (e,g, 'FROM ... etc'), without the ORDER BY
 *  + $search_info->order: The "ORDER BY" SQL fragment (should contain the ORDER BY text also)
 *
 *  Remember to generate and include the query SQL in your WHERE clause with:
 *     totara_dialog_get_search_clause()
 */
switch ($searchtype) {
    /**
     * User search
     */
    case 'user':
        // Grab data from dialog object
        if (isset($this->customdata['current_user'])) {
            $userid = $this->customdata['current_user'];
            $formdata['hidden']['userid'] = $userid;
        }

        // Generate search SQL
        $keywords = totara_search_parse_keywords($query);
        $fields = array('firstname', 'lastname');
        list($searchsql, $params) = totara_search_get_keyword_where_clause($keywords, $fields);

        $search_info->fullname = $DB->sql_fullname('firstname', 'lastname');

        // exclude deleted, guest users and self
        $guest = guest_user();

        $search_info->sql = "
            FROM
                {user}
            WHERE
                {$searchsql}
                AND deleted = 0
                AND id != ?
        ";
        $params[] = $guest->id;

        if (isset($this->customdata['current_user'])) {
            $search_info->sql .= " AND id <> ?";
            $params[] = $userid;
        }

        $search_info->order = " ORDER BY firstname, lastname";
        $search_info->params = $params;
        break;


    /**
     * Hierarchy search
     */
    case 'hierarchy':
        // Grab data from dialog object
        $prefix = $this->hierarchy->prefix;
        $frameworkid = $this->frameworkid;
        $requireevidence = $this->requireevidence;
        $shortprefix = hierarchy::get_short_prefix($this->hierarchy->prefix);
        $formdata['hierarchy'] = $this->hierarchy;
        $formdata['hidden']['prefix'] = $prefix;
        $formdata['showpicker'] = !$this->disable_picker;
        $formdata['showhidden'] = $showhidden = $this->showhidden;
        $formdata['frameworkid'] = $frameworkid;

        // Generate search SQL
        $keywords = totara_search_parse_keywords($query);
        $fields = array('i.fullname', 'i.shortname', 'i.description', 'i.idnumber');
        list($searchsql, $params) = totara_search_get_keyword_where_clause($keywords, $fields);

        $search_info->id = 'i.id';
        $search_info->fullname = 'CASE WHEN i.idnumber IS NULL OR i.idnumber = \'\' THEN i.fullname ELSE '. $DB->sql_concat('i.fullname', "' ('", 'i.idnumber', "')'").' END';

        $search_info->sql = "
            FROM
                {{$shortprefix}} i
            JOIN
                {{$shortprefix}_framework} f
             ON i.frameworkid = f.id
            WHERE
                {$searchsql}
            AND i.visible = 1
        ";

        // Restrict by framework if required
        if ($frameworkid) {
            $search_info->sql .= " AND i.frameworkid = ? ";
            $params[] = $frameworkid;
        }

        // Don't show hidden frameworks
        if (!$showhidden) {
            $search_info->sql .= ' AND f.visible = 1 ';
        }

        // Only show hierarchy items with evidence
        if ($requireevidence) {
            $search_info->sql .= ' AND i.evidencecount > 0 ';
        }

        if (isset($this->customdata['current_item_id'])) {
            $search_info->sql .= "
                AND i.id <> ?
                ";
            $params[] = $this->customdata['current_item_id'];
        }

        $search_info->order = " ORDER BY i.frameworkid, i.sortthread";
        $search_info->params = $params;
        break;


    /**
     * Course (with completion enabled) search
     */
    case 'coursecompletion':
        // Generate search SQL
        $keywords = totara_search_parse_keywords($query);
        $fields = array('c.fullname', 'c.shortname');
        list($searchsql, $params) = totara_search_get_keyword_where_clause($keywords, $fields);

        $search_info->id = 'c.id';
        $search_info->fullname = 'c.fullname';

        $search_info->sql = "
            FROM
                {course} c
        ";

        if ($this->requirecompletioncriteria) {
            $search_info->sql .= "
                LEFT JOIN
                    {course_completion_criteria} ccc
                 ON ccc.course = c.id
            ";
        }

        $search_info->sql .= "
            WHERE
                {$searchsql}
                AND c.visible = 1
        ";

        if ($this->requirecompletion || $this->requirecompletioncriteria) {
            $search_info->sql .= "
                AND c.enablecompletion = ?
            ";
            $params[] = COMPLETION_ENABLED;

            if ($this->requirecompletioncriteria) {
                $search_info->sql .= "
                    AND ccc.id IS NOT NULL
                ";
            }
        }

        $search_info->order = " ORDER BY c.sortorder ASC";
        $search_info->params = $params;
        break;


    /**
     * Program search
     */
    case 'program':
        // Generate search SQL
        $keywords = totara_search_parse_keywords($query);
        $fields = array('fullname', 'shortname');
        list($searchsql, $params) = totara_search_get_keyword_where_clause($keywords, $fields);

        $search_info->sql = "
            FROM
                {prog}
            WHERE
                {$searchsql}
                AND visible = 1
        ";

        $search_info->order = " ORDER BY sortorder ASC";
        $search_info->params = $params;
        break;


    default:
        print_error('invalidsearchtable', 'totara_core');
}


// Generate forn markup
// Create form
$mform = new dialog_search_form(null, $formdata);

// Display form
$mform->display();


// Generate results
if (strlen($query)) {

    $strsearch = get_string('search');
    $strqueryerror = get_string('queryerror', 'totara_core');
    $start = $page * DIALOG_SEARCH_NUM_PER_PAGE;

    $select = "SELECT {$search_info->id} AS id, {$search_info->fullname} AS fullname ";
    $count  = "SELECT COUNT({$search_info->id}) ";

    $total = $DB->count_records_sql($count.$search_info->sql, $search_info->params);
    if ($total) {
        $results = $DB->get_records_sql(
            $select.$search_info->sql.$search_info->order,
            $search_info->params,
            $start,
            DIALOG_SEARCH_NUM_PER_PAGE
        );
    }

    if ($total) {
        if ($results) {
            $pagingbar = new paging_bar($total, $page, DIALOG_SEARCH_NUM_PER_PAGE, $thisurl);
            $pagingbar->pagevar = 'page';
            $output = $OUTPUT->render($pagingbar);
            echo html_writer::tag('div',$output, array('class' => "search-paging"));

            // Generate some treeview data
            $dialog = new totara_dialog_content();
            $dialog->items = array();
            $dialog->parent_items = array();
            $dialog->disabled_items = $this->disabled_items;

            foreach ($results as $result) {
                $item = new object();

                if (method_exists($this, 'search_can_display_result') && !$this->search_can_display_result($result->id)) {
                   continue;
                }

                $item->id = $result->id;
                $item->fullname = format_string($result->fullname);

                if (method_exists($this, 'search_get_item_hover_data')) {
                    $item->hover = $this->search_get_item_hover_data($item->id);
                }

                $dialog->items[$item->id] = $item;
            }

            echo $dialog->generate_treeview();

        } else {
            // if count succeeds, query shouldn't fail
            // must be something wrong with query
            print $strqueryerror;
        }
    } else {
        $params = new stdClass();
        $params->query = $query;

        $message = get_string('noresultsfor', 'totara_core', $params);

        if (!empty($frameworkid)) {
            $params->framework = $DB->get_field($shortprefix.'_framework', 'fullname', array('id' => $frameworkid));
            $message = get_string('noresultsforinframework', 'totara_hierarchy', $params);
        }

        echo html_writer::tag('p', $message, array('class' => 'message'));
    }
}