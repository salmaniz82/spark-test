<?php
define('SERVER', 'localhost');
define('USER', 'root');
define('DATABASE', 'mymvc_db');
define('PASSWORD', '');


function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'].'/';
    return $protocol.$domainName;
}
define( 'SITE_URL', siteURL() );




