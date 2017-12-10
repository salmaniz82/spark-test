<?php

/*
define('SERVER', 'localhost');
define('USER', 'root');
define('DATABASE', 'mymvc_db');
define('PASSWORD', '');

*/






define('SERVER', 'localhost');
define('USER', 'sa_mvctest');
define('DATABASE', 'sa_mvc');
define('PASSWORD', 'RT}W.lrOG[1R');






function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'].'/';
    return $protocol.$domainName;
}
define( 'SITE_URL', siteURL() );




