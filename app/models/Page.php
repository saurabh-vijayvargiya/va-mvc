<?php

  class Page extends Database {
    private $db;
    public function __construct() {
      $this->db = new Database;
    }
  }
