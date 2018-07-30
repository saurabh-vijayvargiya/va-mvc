<?php

  class Pages extends Controller {
    public function __construct() {
      // Initialize the model here.
    }

    public function index() {
      $data = [
        'title' => 'VA-MVC'
      ];
      $this->view('pages/index', $data);
    }

    public function about() {
      $this->view('pages/about');
    }
  }
