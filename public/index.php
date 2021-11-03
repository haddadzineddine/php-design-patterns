<?php

use App\ChainOfResponsibility\ChainOfResponsibility;

define('ROOT_PATH', dirname(__DIR__));

require_once ROOT_PATH . '/vendor/autoload.php';

ChainOfResponsibility::run();
