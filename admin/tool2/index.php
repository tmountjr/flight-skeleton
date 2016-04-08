<?php

require realpath(__DIR__ . "/../../flightapps/bootstrap.php");

Flight::route('/', ['App\Controllers\Tool2\BaseController', 'index']);

Flight::start();