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

$params = array('pam_min_uid', 'pam_max_uid');

foreach($params as $param){
	if(isset($_POST[$param])){
		OC_Appconfig::setValue('user_pam', $param, $_POST[$param]);
	}
}


// fill template
$tmpl = new OC_Template( 'user_pam', 'settings');
foreach($params as $param){
		$value = OC_Appconfig::getValue('user_pam', $param,'');
		$tmpl->assign($param, $value);
}

// fill in default values
$tmpl->assign( 'pam_min_uid', OC_Appconfig::getValue('user_pam', 'pam_min_uid', OC_USER_BACKEND_PAM_MIN_UID));
$tmpl->assign( 'pam_max_uid', OC_Appconfig::getValue('user_pam', 'pam_max_uid', OC_USER_BACKEND_PAM_MAX_UID));

return $tmpl->fetchPage();
