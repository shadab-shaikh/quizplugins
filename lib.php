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
 * Capability definitions for this module.
 *
 * @package   mod_quizplugins
 * @copyright 2021 WisdmLabs {@link http://www.wisdmlabs.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


function quizplugins_add_instance($newmodule){
    // This function is executed after an admin creates an instance of activity plugin.
}

function quizplugins_update_instance($newmodule){

}

function quizplugins_delete_instance($id){
    // This function is executed after an admin update an instance of activity plugin
}

function quizplugins_user_outline(){
    // This function is executed after an adminr delete an instance of activity plugin.
}

function quizplugins_user_complete($course, $user, $mod, $newmodule){

}

function quizplugins_print_recent_activity($course, $isteacher, $timestart){

}

function quizplugins_cron(){

}
