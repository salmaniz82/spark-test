<?php


/*
	Load basic config file & application Controller 
	- config.php setting & intialzing constant & variables like 
	----	SITE_URL, ABSPATH
	----	Server & DB : LOCAL development / LIVE
	----	ENVIROMENT : DEV / LIVE
	----	TIMEZONE 

	- appCtrl.php
	----	Every controller extends this controller to share common functionality
*/
require_once ABSPATH . 	'app/config.php';
require_once ABSPATH . 	'app/controllers/appCtrl.php';


/*
	Loading Core Framework Files
*/



require_once ABSPATH . 	'framework/route.class.php';
require_once ABSPATH . 	'framework/database.class.php';
require_once ABSPATH . 	'framework/auth.class.php';
require_once ABSPATH . 	'framework/view.class.php';
require_once ABSPATH . 	'framework/template.class.php';
require_once ABSPATH . 	'framework/jwt.class.php';
require_once ABSPATH . 	'framework/events.class.php';

/*
	Loading External GUMP Validation Class
*/


require_once ABSPATH . 	'framework/gump.class.php';
require_once ABSPATH .	'app/events.php';
require_once ABSPATH . 	'app/routes.php';


// set default timezone in config
date_default_timezone_set(TIMEZONE);


// Initialize Route Class

