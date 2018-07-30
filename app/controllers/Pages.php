<?php

  class Pages extends Controller {
    public function __construct() {
      $this->pageModel = $this->model('Page');
    }

    public function index() {
      $pages = $this->pageModel->getPages();
      $data = [
        'title' => 'VA-MVC',
        'pages' => $pages
      ];
      $this->view('pages/index', $data);
    }

    public function about() {
      $this->view('pages/about');
    }
  }
