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

    public function prepare($data) {
        $id = $data['id'];
        unset($data['id']);
        $sql = "UPDATE courses SET ";

        foreach (array_keys($data) as $i => $field) {
            $sql .= ($i) ? ", " : "";
            $sql .= "$field = ?";
        }       
        $sql .= " WHERE id = ?";
        $data[] = $id;

        $this->conn->execute_query($sql, array_values($data));
        if ($this->conn->error) {
            return array('insert_id' => null, 'error' => $this->conn->error);
        }
        return array('affected_rows' => $this->conn->affected_rows, 'error' => null);
    }

    public function save($sql) {
        $this->conn->query($sql);
        if ($this->conn->error) {
            return array('insert_id' => null, 'error' => $this->conn->error);
        }
        return array('insert_id' => $this->conn->insert_id, 'affected_rows' => $this->conn->affected_rows, 'error' => null);
    }

    public function close() {
        $this->conn->close();
    }
}
?>