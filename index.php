<?php
/*
Plugin Name: PHP Object Injection Test
Plugin URI: https://www.pluginvulnerabilities.com/
Description: Allows for easy testing of PHP object injection vulnerabilities. Displays message "PHP object injection has occurred." when "O:20:"PHP_Object_Injection":0:{}" is unserialized.
Version: 1.0
Author: White Fir Design
Author URI: https://www.pluginvulnerabilities.com/
License: GPLv2

Copyright 2017 White Fir Design

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; only version 2 of the License is applicable.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

class PHP_Object_Injection {
   function __wakeup() {
		exit('PHP object injection has occurred.');
   }
}

?>
