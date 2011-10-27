ownCloud - PAM Authentication
=============================

A small library for authenticating users against PAM in ownCloud 2.x. 

Requirements
------------

The ownCloud user\_pam module's requirements are as follows:

* 	The [pecl PAM package](http://pecl.php.net/PAM). 
		If you're on Debian/Ubuntu/similar, please *do not* use the php5-auth-pam module. It is deprecated.   
		Installation should be fairly straigt forward: <pecl install pam>. Don't forget to wire `pam.so` into your
		`php.ini`, which resides under `/etc/php5/apache2/php.ini` in a standard Debian+Apache2 setup.

*	A working ownCloud installation and a registered admin user.

Installation
------------

The installation is simple. Just download or clone this repository and copy the contents 
into the owncloud `apps/user_pam/` directory. If you use anything else than 
Debian/Ubuntu/similar, you may need to edit your `/etc/pam.d/` files in order to make PAM accept 
authentication requests from php. But as far as I can tell, a standard PAM setup should work.
After that enable the module in the "Applications" menu using your admin user.

Disclaimer
----------
Well, I hate disclaimers but I guess I should state that I hacked this together in 45 min. So, please 
do not make me responsible for a broken ownCloud install or someone breaking into your system. :-)   
But hey, I will improve this app over time.
