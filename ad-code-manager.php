<?php
/*
Plugin Name: Ad Code Manager
Plugin URI: http://automattic.com
Description: Easy ad code management
Author: Rinat Khaziev, Jeremy Felt, Daniel Bachhuber, Automattic, doejo
Version: 0.5
Author URI: http://automattic.com

GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/
const AD_CODE_MANAGER_VERSION = '0.5';
const AD_CODE_MANAGER_FILE    = __FILE__;

require_once __DIR__ . '/src/class-acm-provider.php';
require_once __DIR__ . '/src/class-acm-wp-list-table.php';
require_once __DIR__ . '/src/class-acm-widget.php';
require_once __DIR__ . '/src/markdown.php';
require_once __DIR__ . '/src/class-ad-code-manager.php';

global $ad_code_manager;
$ad_code_manager = new Ad_Code_Manager();
