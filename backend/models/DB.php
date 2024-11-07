<?php
class DB {
    private static $instance = null;
    private $conn;

    private function __construct() {
        $config = require(__DIR__ . '/../config/config.php');
        $this->conn = new mysqli(
            $config['db']['host'], 
            $config['db']['user'], 
            $config['db']['password'], 
            $config['db']['dbname']
        );
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}
