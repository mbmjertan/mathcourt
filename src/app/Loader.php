<?php
$Config = json_decode(file_get_contents('config.json'));
$RequestURI = str_replace($Config->trimpath, '', $_SERVER['REQUEST_URI']);
include __DIR__.'/../../vendor/autoload.php';
\RedBeanPHP\R::setup('mysql:host='.$Config->dbserv.';dbname='.$Config->database,$Config->dbuser, $Config->dbpassword);
if($RequestURI != '' && $RequestURI != '/'){ $Cookie = new Mathcourt\Cookie();}
$Request = new Mathcourt\HTTPRequest($RequestURI);