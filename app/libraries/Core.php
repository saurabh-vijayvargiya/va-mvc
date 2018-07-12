<?php

/**
 * App core class
 * Creates URL and loads core controller
 * URL format - /controller/method/params
 */
class Core {
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = [];
}
