<?php
/*
   ------------------------------------------------------------------------
   Plugin OS
   Copyright (C) 2016-2024 by Junior Marcati
   https://github.com/juniormarcati/os
   ------------------------------------------------------------------------
   LICENSE
   This file is part of Plugin OS project.
   Plugin OS is free software: you can redistribute it and/or modify
   it under the terms of the GNU Affero General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.
   Plugin OS is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
   GNU Affero General Public License for more details.
   You should have received a copy of the GNU Affero General Public License
   along with Plugin OS. If not, see <http://www.gnu.org/licenses/>.
   ------------------------------------------------------------------------
   @package   Plugin OS
   @author    Junior Marcati
   @co-author
   @copyright Copyright (c) 2016-2024 OS Plugin Development team
   @license   AGPL License 3.0 or (at your option) any later version
              http://www.gnu.org/licenses/agpl-3.0-standalone.html
   @link      https://github.com/juniormarcati/os
   @since     2016
   ------------------------------------------------------------------------
 */
function plugin_os_install() {
  
  global $DB, $LANG;
  
  function plugin_change_profile_os() {
    if (Session::haveRight('config', UPDATE)) {
       $_SESSION["glpi_plugin_os_profile"] = ['os' => 'w'];
 
    } else if (Session::haveRight('config', READ)) {
       $_SESSION["glpi_plugin_os_profile"] = ['os' => 'r'];
 
    } else {
       unset($_SESSION["glpi_plugin_os_profile"]);
    }
 }
 

  // All schema changes are now handled by migration files in sql/
  return true;
}
function plugin_os_uninstall(){
  global $DB;
  
  // All schema drops are now handled by migration files in sql/
	
  return true;
}