<?php

// Display user position information

require_once('../config.php');
require_once($CFG->dirroot.'/local/js/setup.php');
require_once($CFG->dirroot.'/hierarchy/type/position/lib.php');
require_once('positions_form.php');


// Get input parameters
$user       = required_param('user', PARAM_INT);               // user id
$type       = optional_param('type', '', PARAM_ALPHA);      // position type
$courseid   = required_param('courseid', PARAM_INT);           // course id


// Load some basic data
if (!$course = get_record('course', 'id', $courseid)) {
    error("Course id is incorrect.");
}

if (!$user = get_record('user', 'id', $user)) {
    error("User ID is incorrect");
}


// Check permissions
$personalcontext = get_context_instance(CONTEXT_USER, $user->id);
$coursecontext = get_context_instance(CONTEXT_COURSE, $course->id);

// Check logged in user can view this profile
require_login($course);

if (!has_capability('moodle/user:viewdetails', $coursecontext) && 
    !has_capability('moodle/user:viewdetails', $personalcontext)) {
    print_error('cannotviewprofile');
}

// Is user deleted?
if ($user->deleted) {
    print_header();
    print_heading(get_string('userdeleted'));
    print_footer();
    die;
}

// Can user edit this user's positions?
$can_edit = false;
if (has_capability('moodle/local:assignuserposition', get_context_instance(CONTEXT_SYSTEM))) {
    $can_edit = true;
}
elseif (has_capability('moodle/local:assignuserposition', $personalcontext)) {
    $can_edit = true;
}
elseif ($USER->id == $user->id &&
    has_capability('moodle/local:assignselfposition', get_context_instance(CONTEXT_SYSTEM))) {
    $can_edit = true;
}


// Check a valid position type was supplied
if ($type === '') {
    $type = reset($POSITION_TYPES);
} 
elseif (!in_array($type, $POSITION_TYPES)) {
    // Redirect to default position
    redirect("{$CFG->wwwroot}/user/positions.php?user={$user->id}&amp;courseid={$course->id}");
}

// Attempt to load the assignment
$position_assignment = new position_assignment(
    array(
        'userid'    => $user->id,
        'type'      => $POSITION_CODES[$type]
    )
);


// Log
add_to_log($course->id, "user", "position view", "positions.php?user=$user->id&amp;courseid=$course->id&amp;type=$type", "$user->id");

$positions          = get_string('positions', 'position');
$positiontype       = get_string('type'.$type, 'position');
$fullname           = fullname($user, true);

$navlinks = array();

if ($course->id != SITEID && has_capability('moodle/course:viewparticipants', $coursecontext)) {
    $navlinks[] = array('name' => $strparticipants, 'link' => "{$CFG->wwwroot}/user/index.php?id={$course->id}", 'type' => 'misc');
}

$navlinks[] = array('name' => $fullname, 'link' => "{$CFG->wwwroot}/user/view.php?id={$user->id}&amp;course={$course->id}", 'type' => 'misc');
$navlinks[] = array('name' => $positiontype, 'link' => null, 'type' => 'misc');
$navigation = build_navigation($navlinks);


// Setup custom javascript
setup_lightbox(array(MBE_JS_TREEVIEW, MBE_JS_ADVANCED));
require_js(
    array(
        $CFG->wwwroot.'/local/js/lib/ui.datepicker.js',
        $CFG->wwwroot.'/local/js/position.assign.js',
        $CFG->wwwroot.'/local/js/position.manager.assign.js',
        $CFG->wwwroot.'/local/js/position.organisation.assign.js'
    )
);

$CFG->stylesheets[] = $CFG->wwwroot.'/local/js/lib/ui-lightness/jquery-ui-1.7.2.custom.css';

print_header("{$course->fullname}: {$fullname}: {$positiontype}", $course->fullname, $navigation);



/// Print tabs at top
/// This same call is made in:
///     /user/view.php
///     /user/edit.php
///     /course/user.php
$currenttab = 'position'.$type;
$showroles = 1;
include($CFG->dirroot.'/user/tabs.php');

$currenturl = "{$CFG->wwwroot}/user/positions.php?user={$user->id}&courseid={$course->id}&type={$type}";

// Form
$form = new user_position_assignment_form($currenturl, compact('type', 'user', 'position_assignment'));
$form->set_data($position_assignment);

if ($form->is_cancelled()){
    // Do nothing
}
elseif ($data = $form->get_data()) {

    // Fix dates
    if ($data->timevalidfrom) {
        $data->timevalidfrom = strtotime($data->timevalidfrom);
    }

    if ($data->timevalidto) {
        $data->timevalidto = strtotime($data->timevalidto);
    }

    // Setup data
    position_assignment::set_properties($position_assignment, $data);

    $data->type = $POSITION_CODES[$type];
    $data->userid = $user->id;

    // Get new manager id
    $managerid = isset($data->managerid) ? $data->managerid : null;

    // If aspiration type, make sure no manager is set
    if ($data->type == POSITION_TYPE_ASPIRATIONAL) {
        $managerid = null;
    }

    assign_user_position($position_assignment, $managerid);

    commit_sql();
    redirect($currenturl);
}

if (!$can_edit) {
    $form->_form->hardFreezeAllVisible();
}

// Setup calendar
?>
<script type="text/javascript">
    
    $(function() {
        $('#id_timevalidfrom, #id_timevalidto').datepicker(
            {
                dateFormat: 'dd/mm/yy',
                showOn: 'button',
                buttonImage: '../local/js/images/calendar.gif',
                buttonImageOnly: true
            }
        );
	});
</script>
<?php

$form->display();

print_footer($course);