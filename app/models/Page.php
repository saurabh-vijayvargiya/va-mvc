<?php

  class Page extends Database {
    private $db;
    public function __construct() {
      $this->db = new Database;
    }

    // Getting pages.
    public function getPages() {
      $this->db->prepare("select * from pages");

      return $this->db->resultSet();
    }
  }
