<?php

  class Pages extends Controller {
    public function __construct() {
      $this->pageModel = $this->model('Page');
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
