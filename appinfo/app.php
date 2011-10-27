<?php

/**
* ownCloud - user_pam
*
* @author Max Liebkies
* @copyright 2011 Max Liebkies <mail@maxliebkies.de>
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

require_once('apps/user_pam/user_pam.php');

OC_APP::registerAdmin('user_pam','settings');

//default defines
define('OC_USER_BACKEND_PAM_MIN_UID', 500);
define('OC_USER_BACKEND_PAM_MAX_UID', 0);

// register user backend
OC_User::useBackend( "PAM" );

// add settings page to navigation
$entry = array(
	'id' => "user_pam_settings",
	'order'=>1,
	'href' => OC_Helper::linkTo( "user_pam", "settings.php" ),
	'name' => 'PAM'
);
