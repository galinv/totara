<?php

require_once('../../../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once($CFG->dirroot.'/hierarchy/type/competency/lib.php');
require_once($CFG->dirroot.'/local/js/setup.php');

// Page title
$pagetitle = 'assigncompetencies';

///
/// Params
///

// Assign to id
$assignto = required_param('assignto', PARAM_INT);

// Parent id
$parentid = optional_param('parentid', 0, PARAM_INT);

// Framework id
$frameworkid = optional_param('frameworkid', 0, PARAM_INT);


///
/// Permissions checks
///

// Setup page
admin_externalpage_setup('positionmanage');

// Check permissions
$sitecontext = get_context_instance(CONTEXT_SYSTEM);
require_capability('moodle/local:updateposition', $sitecontext);

// Setup hierarchy object
$hierarchy = new competency();

// Load framework
if (!$framework = $hierarchy->get_framework($frameworkid)) {
    error('Competency framework could not be found');
}

// Load max depth
$max_depth = $hierarchy->get_max_depth();

// Load competencies to display
$competencies = $hierarchy->get_items_by_parent($parentid);

// Load currently assigned competencies
// TODO

///
/// Display page
///

// If parent id is not supplied, we must be displaying the main page
if (!$parentid) {

?>

<div class="selectcompetencies">

<?php $hierarchy->display_framework_selector('', true) ?>

<h2><?php echo get_string($pagetitle, $hierarchy->prefix); ?></h2>

<div class="selected">
    <p>
        <?php echo get_string('dragheretoassign', $hierarchy->prefix) ?>
    </p>
</div>

<p>
    <?php echo get_string('locatecompetency', $hierarchy->prefix) ?>:
</p>

<?php
}

// If this is the root node
if (!$parentid) {
    echo '<ul class="treeview filetree">';
}

echo build_treeview(
    $competencies,
    get_string('nounassignedcompetencies', 'position'),
    $max_depth
);

// If no parent id, close div
if (!$parentid) {
    echo '</ul></div>';
}