<?php
/* rename this file as config.php and remove -sample from it */
if ( ! defined( 'ABSPATH' ) ) die( 'Direct Access File is not allowed' );

function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'].'/';
    return $protocol.$domainName;
}


/*

Note : 
- example.com OR subdomain.example.com
- define( 'SITE_URL', siteURL() . '' );

subdomain.example.com/project01
define( 'SITE_URL', siteURL() . 'project01' );

*/

if ( !defined('SITE_URL') )
	define('SITE_URL', siteURL() . '');



define('TIMEZONE', 'Asia/Karachi');


// Set Environment variable dev OR live

define('ENV', 'dev');



	if(SITE_URL == 'http://mvc.local/')
	{
		define('SERVER', 'localhost');				
		define('USER', 'root');
		define('DATABASE', 'localDBName');
		define('PASSWORD', 'localDBPassword');
	}
	else {	
		define('SERVER', 'localhost');
		define('USER', 'serverMysqlUserName');
		define('DATABASE', 'serverMysqlDBName');
		define('PASSWORD', 'serMysqlUserPassword');
	}








