<?php

  //DB Params
  define('DB_HOST', $_ENV['DB_HOST']);
  define('DB_USER', $_ENV['DB_USER']);
  define('DB_PASS', $_ENV['DB_PASS']);
  define('DB_NAME', $_ENV['DB_NAME']);
  
  
  
  
  // App root
  define('APPROOT', dirname(__dir__));

  // URL root
  define('URLROOT', $_SERVER['SERVER_NAME']);

  // Site Name
  define('SITENAME', $_ENV['SITENAME']);
