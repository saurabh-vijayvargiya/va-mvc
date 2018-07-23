<?php

/**
 * Base Controller
 * Loads model and view
 */
class Controller {

  // Loading model for the controller
  public function model($model) {
    if (file_exists('../app/models/' . $model . '.php')) {
      require_once '../app/models/' . $model . '.php';
      
      // instantiate the model.
      return new $model();
    }
    else {
      die('Model(' . $model . ') does not exists.');
    }
  }

  // Loading the view.
  public function view($view, $data = []) {
    if (file_exists('../app/views/' . $view . '.php')) {
      require_once '../app/views/' . $view . '.php';
    }
    else {
      die('View(' . $view . ') does not exists.');
    }
  }
}
