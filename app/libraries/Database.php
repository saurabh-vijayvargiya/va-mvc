<?php
  /**
   * PDO Database CLass
   * Connect to database
   * Create prepared statements
   * Bind values
   * Return rows and results
   */
  class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct() {
      // set dsn
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

      $options = [
        'PDO::ATTR_PERSISTENT' => true,
        'PDO::ATTR_ERRMODE' => 'ERRMODE_EXCEPTION'
      ];

      try {
        $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
      } catch (PDOException $e) {
        $this->error = $e->getMessage();
        echo $this->error;
      }
    }
  }
