<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
* Heading and course images settings page file.
*
* @packagetheme_university
* @copyright  2016 Chris Kenniburg
* @creditstheme_university - MoodleHQ
* @licensehttp://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_university_presetadjustment', get_string('presetadjustmentsettings', 'theme_university'));

// Content Info
$name = 'theme_university/generalcontentinfo';
$heading = get_string('generalcontentinfo', 'theme_university');
$information = get_string('generalcontentinfodesc', 'theme_university');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Frontpage show login form
$name = 'theme_university/showloginform';
$title = get_string('showloginform', 'theme_university');
$description = get_string('showloginform_desc', 'theme_university');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Frontpage show enroll form and other site homepage options on MyDashboard.
$name = 'theme_university/enhancedmydashboard';
$title = get_string('enhancedmydashboard', 'theme_university');
$description = get_string('enhancedmydashboard_desc', 'theme_university');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Frontpage My Courses Sort by Lastaccess.
$name = 'theme_university/frontpagemycoursessorting';
$title = get_string('frontpagemycoursessorting', 'theme_university');
$description = get_string('frontpagemycoursessorting_desc', 'theme_university');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Content spacing
$name = 'theme_university/learningcontentpadding';
$title = get_string('learningcontentpadding', 'theme_university');
$description = get_string('learningcontentpadding_desc', 'theme_university');;
$default = '125px';
$choices = array(
        '0px' => '0px',
        '25px' => '25px',
        '50px' => '50px',
        '75px' => '75px',
        '100px' => '100px',
        '125px' => '125px',
        '150px' => '150px',
        '175px' => '175px',
        '200px' => '200px',
        '225px' => '225px',
        '250px' => '250px',
        '275px' => '275px',
        '300px' => '300px',
        '325px' => '325px',
        '350px' => '350px',
        '375px' => '375px',
        '400px' => '400px',
        '425px' => '425px',
        '450px' => '450px',
        '475px' => '475px',
        '500px' => '500px',
        '525px' => '525px',
        '550px' => '550px',
        '575px' => '575px',
        '600px' => '600px',
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Header size setting.
$name = 'theme_university/headerimagepadding';
$title = get_string('headerimagepadding', 'theme_university');
$description = get_string('headerimagepadding_desc', 'theme_university');;
$default = '400px';
$choices = array(
    '0px' => '0px',
    '25px' => '25px',
    '50px' => '50px',
    '75px' => '75px',
    '100px' => '100px',
    '125px' => '125px',
    '150px' => '150px',
    '175px' => '175px',
    '200px' => '200px',
    '225px' => '225px',
    '250px' => '250px',
    '275px' => '275px',
    '300px' => '300px',
    '325px' => '325px',
    '350px' => '350px',
    '375px' => '375px',
    '400px' => '400px',
    '425px' => '425px',
    '450px' => '450px',
    '475px' => '475px',
    '500px' => '500px',
    '525px' => '525px',
    '550px' => '550px',
    '575px' => '575px',
    '600px' => '600px',
    '625px' => '625px',
    '650px' => '650px',
    '675px' => '675px',
    '700px' => '700px',
    '725px' => '725px',
    '750px' => '750px',
    '775px' => '775px',
    '800px' => '800px',
    '10%' => '10%',
    '50%' => '50%',
    '75%' => '75%',
    '100%' => '100%',
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// gutter width
$name = 'theme_university/gutterwidth';
$title = get_string('gutterwidth', 'theme_university');
$description = get_string('gutterwidth_desc', 'theme_university');;
$default = '0rem';
$choices = array(
        '0rem' => '0rem',
        '1rem' => '1rem',
        '2rem' => '2rem',
        '3rem' => '3rem',
        '4rem' => '4rem',
        '5rem' => '5rem',
        '6rem' => '6rem',
        '7rem' => '7rem',
        '8rem' => '8rem',
        '9rem' => '9rem',
        '10rem' => '10rem',
        '12rem' => '12rem',
        '14rem' => '14rem',
        '16rem' => '16rem',
        '18rem' => '18rem',
        '20rem' => '20rem',
        '22rem' => '22rem',
        '24rem' => '24rem',
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Block and Content widths
$name = 'theme_university/blockwidthuniversity';
$title = get_string('blockwidthuniversity', 'theme_university');
$description = get_string('blockwidthuniversity_desc', 'theme_university');;
$default = '280px';
$choices = array(
        '180px' => '150px',
        '230px' => '200px',
        '280px' => '250px',
        '305px' => '275px',
        '330px' => '300px',
        '355px' => '325px',
        '380px' => '350px',
        '405px' => '375px',
        '430px' => '400px',
        '455px' => '425px',
        '480px' => '450px',
        '20%' => '20%',
        '25%' => '25%',
        '30%' => '30%',
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Courses height
$name = 'theme_university/activityiconsize';
$title = get_string('activityiconsize', 'theme_university');
$description = get_string('activityiconsize_desc', 'theme_university');;
$default = '32px';
$choices = array(
        '24px' => '24px',
        '28px' => '28px',
        '32px' => '32px',
        '36px' => '36px',
        '40px' => '40px',
        '44px' => '44px',
        '48px' => '48px',
        '52px' => '52px',
        '56px' => '56px',
        '60px' => '60px',
        '64px' => '64px',
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for icon One
$name = 'theme_university/coursetileinfo';
$heading = get_string('coursetileinfo', 'theme_university');
$information = get_string('coursetileinfodesc', 'theme_university');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// trim title setting.
$name = 'theme_university/trimtitle';
$title = get_string('trimtitle', 'theme_university');
$description = get_string('trimtitle_desc', 'theme_university');
$default = '256';
$choices = array(
        '15' => '15',
        '20' => '20',
        '30' => '30',
        '40' => '40',
        '50' => '50',
        '60' => '60',
        '70' => '70',
        '80' => '80',
        '90' => '90',
        '100' => '100',
        '110' => '110',
        '120' => '120',
        '130' => '130',
        '140' => '140',
        '150' => '150',
        '175' => '175',
        '200' => '200',
        '256' => '256',
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Frontpage Available Courses enhancement
$name = 'theme_university/titletooltip';
$title = get_string('titletooltip', 'theme_university');
$description = get_string('titletooltip_desc', 'theme_university');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// trim title setting.
$name = 'theme_university/trimsummary';
$title = get_string('trimsummary', 'theme_university');
$description = get_string('trimsummary_desc', 'theme_university');
$default = '300';
$choices = array(
        '30' => '30',
        '60' => '60',
        '90' => '90',
        '100' => '100',
        '150' => '150',
        '200' => '200',
        '250' => '250',
        '300' => '300',
        '350' => '350',
        '400' => '400',
        '450' => '450',
        '500' => '500',
        '600' => '600',
        '800' => '800',
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Courses height
$name = 'theme_university/courseboxheight';
$title = get_string('courseboxheight', 'theme_university');
$description = get_string('courseboxheight_desc', 'theme_university');;
$default = '250px';
$choices = array(
        '200px' => '200px',
        '225px' => '225px',
        '250px' => '250px',
        '275px' => '275px',
        '300px' => '300px',
        '325px' => '325px',
        '350px' => '350px',
        '375px' => '375px',
        '400px' => '400px',
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// category icons on or off
$name = 'theme_university/enablecategoryicon';
$title = get_string('enablecategoryicon', 'theme_university');
$description = get_string('enablecategoryicon_desc', 'theme_university');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

//course category Icon
$name = 'theme_university/catsicon';
$title = get_string('catsicon','theme_university');
$description = get_string('catsicon_desc', 'theme_university');
$default = 'folder';
$choices = array(
    'clone' => 'Clone',
    'bookmark' => 'Bookmark',
    'book' => 'Book',
    'certificate' => 'Certificate',
    'desktop' => 'Desktop',
    'graduation-cap' => 'Graduation Cap',
    'users' => 'Users',
    'bars' => 'Bars',
    'paper-plane' => 'Paper Plane',
    'plus-circle' => 'Plus Circle',
    'Sitemap' => 'Sitemap',
    'puzzle-piece' => 'Puzzle Piece',
    'spinner' => 'Spinner',
    'circle-o-notch' => 'Circle O Notch',
    'check-square-o' => 'Check Square O',
    'plus-square-o' => 'Plus Square O',
    'chevron-circle-right' => 'Chevron Circle Right',
    'arrow-circle-right' => 'Arrow Circle Right',
    'carrot-down' => 'Caret Down',
    'forward' => 'Forward',
    'file-text' => 'File Text',
    'align-right' => 'Align Right',
    'angle-double-right' => 'Angle Double Right',
    'folder-open' => 'Folder Open',
    'folder' => 'Folder',
    'folder-open-o' => 'Folder Open O',
    'chevron-right' => 'Chevron Right',
    'star' => 'Star',
    'user-circle' => 'User Circle',
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
