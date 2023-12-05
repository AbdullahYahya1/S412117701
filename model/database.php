<?php

    class DatabaseModel {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "users";
        private $conn;
        public $isconnected;
        public function __construct() {
            if (session_status() != PHP_SESSION_ACTIVE) {
                session_start();
            }
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if ($this->conn) {
                $this->isconnected = true;
            } else {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

        public function query($sql) {
            return $this->conn->query($sql);
        }

        // INSERT INTO `users` (`id`, `username`, `password`, `date`, `email`) VALUES (NULL, 'abdullah', 'L123456n', CURRENT_TIMESTAMP, 'abdullah@gmail.com');

    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPasswordHash = $row['password'];
            $fixedSalt = 'abc123321';
            $userHash = hash('ripemd128', $fixedSalt . $password . $fixedSalt);
            if ($userHash === $storedPasswordHash) {
                return $row['id'];
            }
        }

        return false;
    }

    public function register($username, $password , $email) {
        $existingUserCheck = "SELECT * FROM users WHERE email = '$email'";
        $existingUserResult = $this->query($existingUserCheck);
        if ($existingUserResult->num_rows > 0) {
            return false;
        }
        $fixedSalt = 'abc123321';
        $hashedPassword = hash('ripemd128', $fixedSalt . $password . $fixedSalt);

        $sql = "INSERT INTO `users` (`username`, `password` , `email`) VALUES ('$username', '$hashedPassword','$email');";
        $result = $this->query($sql);

        if (!$result) {
            
            return false;
        }
        echo "TRue"; 
        return true;
    }
    public function message1($message,$publi){
        $id = $_SESSION["id"];
        $query = "INSERT INTO `message` (`user_id`, `message` , `public`) VALUES ('$id', '$message','$publi')";
        $res =$this->query($query);
        return $res; 
    
    }
    public function getEmail($id){
        $query = "SELECT email FROM users WHERE id = '$id'";
        return $this->query($query);
    }
    
    public function messages(){
        $query = "SELECT `user_id`, `id` ,`message` ,`public` FROM `message` ORDER BY `date` DESC";
        $res=$this->query($query);
        return $res;
    }    
    public function deleteMessage($id) {
        $id = mysqli_real_escape_string($this->conn, $id); // Escape input to prevent SQL injection
    
        $query = "DELETE FROM `message` WHERE `id` = '$id'";
        $result = $this->query($query);
    
        if (!$result) {
            return false; // Delete operation failed
        }
    
        return true; // Delete operation successful
    }
    public function setupDatabase() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sqlCreateDB = "CREATE DATABASE IF NOT EXISTS users";
        if ($conn->query($sqlCreateDB) === TRUE) {
            // echo "Database created successfully<br>";
        } else {
            // echo "Error creating database: " . $conn->error;
        }
        $conn->select_db("users");
        $sqlCreateUsersTable = "CREATE TABLE IF NOT EXISTS users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE, 
            password VARCHAR(128) NOT NULL,
            email VARCHAR(50) NOT NULL,
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($conn->query($sqlCreateUsersTable) === TRUE) {
            // echo "Users table created successfully<br>";
        } else {
            // echo "Error creating users table: " . $conn->error;
        }
        $sqlCreateMessageTable = "CREATE TABLE IF NOT EXISTS message (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            user_id INT(6) UNSIGNED,
            message TEXT NOT NULL,
            public INT(6) UNSIGNED,
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($conn->query($sqlCreateMessageTable) === TRUE) {
            // echo "Message table created successfully<br>";
        } else {
            // echo "Error creating message table: " . $conn->error;
        }

    }
        public function __destruct() {
            mysqli_close($this->conn);
        }
    }

$d = new DatabaseModel(); 
$d->setupDatabase();
$d->register('admin', 'Az123456' , 'admin_NUMBER_one@gmail.com');