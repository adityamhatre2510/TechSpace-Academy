<?php

class Database {
    private $host = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $db_name = DB_NAME;
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function save($sql) {
        $this->conn->query($sql);
        if ($this->conn->error) {
            return array('insert_id' => null, 'error' => $this->conn->error);
        }
        return array('insert_id' => $this->conn->insert_id, 'error' => null);
    }

    public function close() {
        $this->conn->close();
    }
}
?>