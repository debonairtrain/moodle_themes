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
 * Main settings file.
 *
 * @package    theme_university
 * @Copyright   2022 Debonair Training <http://debonairtraining.com>
 * @credits  2016 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/* theme_university BUILDING NOTES
 * =============================
 * Settings have been split into separate files, which are called from
 * this central file. This is to aid ongoing development as I find it
 * easier to work with multiple smaller function-specific files than
 * with a single monolithic settings file.
 * This may be a personal preference and it would be quite feasible to
 * bring all lib functions back into a single central file if another
 * developer prefered to work in that way.
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    // Note new tabs layout for admin settings pages.
    $settings = new theme_boost_admin_settingspage_tabs('themesettinguniversity', get_string('configtitle', 'theme_university'));

    require('settings/general_settings.php');
    //require('settings/bannerimage_settings.php');
    require('settings/colours_settings.php');
    require('settings/markettiles_settings.php');
}
