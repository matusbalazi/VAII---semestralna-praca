<?php

    class Database
    {
        private $conn = null;
        
        public function __construct()
        {
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $database = "main_database";

            $this->conn = new mysqli($servername, $username, $password, $database) or die(mysqli_error($this->conn));

            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            echo "Connected successfully";      
        }

        public function getConnection()
        {
            return $this->conn;
        }
    }

?>