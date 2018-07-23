<?php

  class Pages extends Controller {
    public function __construct() {
      echo 'Pages loaded';
    }

    public function index() {
      $data = [
        'title' => 'VA-MVC',
      ];
      $this->view('pages/index', $data);
    }

    public function about() {
      $this->view('pages/about');
    }
  }
