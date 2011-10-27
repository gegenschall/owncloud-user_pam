<?php

/**
 * ownCloud
 *
 * @author Max Liebkies
 * @copyright 2011 Max Liebkies <mail.maxliebkies.de>
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

class OC_USER_PAM extends OC_User_Backend {
	protected $pam_min_uid;
	protected $pam_max_uid;

	function __construct() {
		$this->pam_min_uid = OC_Appconfig::getValue('user_pam', 'pam_min_uid','');
		$this->pam_max_uid = OC_Appconfig::getValue('user_pam', 'pam_max_uid','');
	}

	function __destruct() {
	}
	
	public function checkPassword( $uid, $password ) {
		if ($uid == '' || $password == ''){
			return false;
		}
		
		$unix_uid = posix_getpwnam($uid);	
		if ($unix_uid['uid'] < $this->pam_min_uid 
			|| ($this->pam_max_uid > $this->pam_min_uid && $unix_uuid['uid'] > $this->pam_max_uid)){
			return false;
		}
		return pam_auth($uid, $password);
	}

	public function userExists( $uid ) {
		echo "debug";
		return false;
	}

}

?>
