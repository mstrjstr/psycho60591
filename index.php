<?php
use Framework\Request;
use Framework\Router;
use Framework\Application;

date_default_timezone_set('Asia/Yekaterinburg');
if ( file_exists(dirname(__FILE__).'/vendor/autoload.php') ) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

$request = new Request();
Application::init();
echo (new Router($request))->getContent();


exit();

require('dbconnect.php');
require('auth.php');
require('components/header.php');
require('main.php');
