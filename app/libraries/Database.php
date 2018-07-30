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

    // Prepare query
    public function prepare($query) {
      $this->stmt = $this->dbh->prepare($query);

    }

    // Bind values
    public function bind($param, $value, $type = null) {
      if($type) {
        switch (true) {
          case is_int($value):
            $type = PDO::PARAM_INT;
            break;
          case is_bool($value):
            $type = PDO::PARAM_BOOL;
            break;
          case is_null($value):
            $type = PDO::PARAM_NULL;
            break;
          default:
            $type = PDO::PARAM_STR;
        }
      }
      $this->stmt->bindValue($param, $value, $type);
    }

    // Execute query
    public function execute() {
      return $this->stmt->execute();
    }

    // Get the result set as an object
    public function resultSet() {
      $this->execute();

      return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Get a record as an object
    public function single() {
      $this->execute();

      return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // Get the row count
    public function rowCount() {
      return $this->stmt->rowCount();
    }
  }
