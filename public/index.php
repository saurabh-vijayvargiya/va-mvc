<?php

require __DIR__ . '/../vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

require_once '../app/bootstrap.php';


// init core 
$core = new Core;
