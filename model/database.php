<?php

    class DatabaseModel {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "users";
        private $conn;
        public $isconnected;
        public function __construct() {
            session_start();
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
            echo 'username '.$row['username'].' id '.$row['id'] . '<br>';

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
        $existingUserCheck = "SELECT * FROM users WHERE username = '$username'";
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
        return true;
    }
    public function message1($message){
        $id = $_SESSION["id"];
        $query = "INSERT INTO `message` (`user_id`, `message`) VALUES ('$id', '$message')";
        $this->query($query);
        return $id; 
    
    }
    public function getEmail($id){
        $query = "SELECT email FROM users WHERE id = '$id'";
        return $this->query($query);
    }
    
    public function messages(){
        $query = "SELECT `user_id`, `message` FROM `message` ORDER BY `date` DESC";
        $res=$this->query($query);
        return $res;
    }    
        public function __destruct() {
            mysqli_close($this->conn);
        }
    }

