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

  public function __construct() {
    $url = $this->getUrl();

    // Checking if controller exists.
    if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
      // Assigning value to currentController.
      $this->currentController = ucwords($url[0]);

      unset($url[0]);
    }

    require_once '../app/controllers/' . $this->currentController . '.php';
    // Instantiating current controller.
    $this->currentController = new $this->currentController;

    // Checking second part of the url.
    if(isset($url[1])) {
      if(method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        unset($url[1]);
      }
    }

    // Get params.
    $this->params = $url ? array_values($url) : [];
    unset($url);
    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
  }

  public function getUrl() {
    // Checking if url key exists in $_GET.
    if(isset($_GET['url'])) {
      // Triming right most /, if any.
      $url = rtrim($_GET['url'], '/');
      // Sanitizing the string as a URL.
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);

      return $url;
    }
  }
}
