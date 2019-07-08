<?php

  // Load config
  require_once 'config/config.php';
  
  // Load library files
  spl_autoload_register(function($className) {
    require_once 'libraries/' . $className . '.php';
  });
