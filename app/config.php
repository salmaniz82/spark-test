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





	if(SITE_URL == 'http://mvc.local/')
	{
		define('SERVER', 'localhost');				
		define('USER', 'root');
		define('DATABASE', 'mymvc_db');
		define('PASSWORD', '');
		define('ENV', 'dev');
	}
	else {	
		define('SERVER', 'localhost');
		define('USER', 'sa_mvctest');
		define('DATABASE', 'sa_mvc');
		define('PASSWORD', 'CSR3%V@eEhOj');
		define('ENV', 'live');
	}








