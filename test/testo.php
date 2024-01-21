<?php
use Monolog\level;
use Monolog\Logger;
use Monolog\StreamHandler;
require __DIR__.'vendor/autoload.php';
$log = new Logger('mahrah');
$log->pushHandler(new StreamHandler(__DIR__.'/logs.log',level::Warning));

$log-> warning ('this is a error !fdf',['ip_address'=>'127.0.0.1']);
$log-> error ('this is a error !fdf',['ip_address'=>'127.0.0.1']);