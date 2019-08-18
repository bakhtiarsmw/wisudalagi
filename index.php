<?php
declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
$dotenv->required(['APP_ENV','DB_DATABASE'])->notEmpty();
$dotenv->required('APP_ENV')->allowedValues(['development','testing','production']);

if(getenv('APP_ENV')==='development'){
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}

require_once __DIR__.'/public/index.php';
