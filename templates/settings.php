<form id="pam" action="#" method="post">
	<fieldset class="personalblock">
		<legend><strong>PAM - Pluggable Authentication Module</strong></legend>
		<p><label for="pam_min_uid">Minimum UID<input type="text" id="pam_min_uid" name="pam_min_uid" value="<?php echo $_['pam_min_uid']; ?>"></label></p>
		<p><label for="pam_max_uid">Maximum UID<input type="text" id="pam_max_uid" name="pam_max_uid" value="<?php echo $_['pam_max_uid']; ?>"></label></p>
		<input type="submit" value="Save" />
	</fieldset>
</form>
