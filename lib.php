<?php

/**
 * @package local_course_settings
 * @author Will Nahmens
 * @license http://www.gnu.org/copyleft/gpl.html
 * @var staClass $plugin
 */

// Add to navigation block
function local_course_settings_extend_settings_navigation($navigation, $context) {
    global $CFG;
    $parent = $navigation->find('courseadmin', navigation_node::TYPE_COURSE);
    if($parent == null) {
        return;
    }
    $parent->add('Set course color and image', '/admin/settings.php?section=themesettingthinkmod_child#theme_thinkmod_child_subtheme', navigation_node::TYPE_COURSE);
}

