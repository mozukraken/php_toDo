<?php

namespace MyApp;

class Todo {
  private $_db;

  public function __construct() {
    try {
      $this->_db = new \PDO(DSN);
      $this->_db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e) {
      echo $e->getMessage();
      exit;
    }
  }

  public function getAll() {

  }
}

?>
