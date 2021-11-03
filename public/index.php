<?php

use App\ChainOfResponsibility\chainOfResponsibility;

define('ROOT_PATH', dirname(__DIR__));

require_once ROOT_PATH . '/vendor/autoload.php';

chainOfResponsibility::run();
