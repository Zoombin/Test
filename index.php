<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/log', Logger::WARNING));
$log->addWarning('_REQUEST:' . var_export($_REQUEST, TRUE));