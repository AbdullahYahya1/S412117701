<?php

require_once __DIR__ . '/../model/database.php';

class AuthController {
    private $dbModel;

    public function __construct() {
        session_start();
        $this->dbModel = new DatabaseModel();
    }
    public function logout() {
        $_SESSION = array();
        session_destroy();
        header("Location: ../view/login");
    }
    public function login() {
        if ($this->dbModel->isconnected) {
            $username = $_POST['PHP_AUTH_USER'];
            $password = $_POST['PHP_AUTH_PW'];
            $id = $this->dbModel->login($username, $password);

            if ($id) {
                $_SESSION['name'] = $username;
                $_SESSION['id'] = $id;
                header("Location: ../");
                // header("Location: ../?success=Registration%20successful,%20please%20login");
            } else {
                $_SESSION = array();
                session_destroy();
                header("Location: ../view/login?stat=1");

            }
        } else {
            echo 'dbModel is not connected ';
        }
    }

    public function register() {
        if ($this->dbModel->isconnected) {
            if (isset($_POST['PHP_AUTH_USER']) && isset($_POST['PHP_AUTH_PW']) && isset($_POST['email'])){
                $name = $_POST['PHP_AUTH_USER'];
                $password = $_POST['PHP_AUTH_PW'];
                $email = $_POST['email'];
            }else{
                header("Location: ../view/register?error=Registration%20failed,%20please%20try%20again");
            }
            if ($this->dbModel->register($name, $password, $email)) {
                $_SESSION['name'] = $name;
                $_SESSION['id'] = $id;
                header("Location: ../");
            } else {
                header("Location: ../view/register?error=Registration%20failed,%20please%20try%20again");
            }
        } else {
            echo 'dbModel is not connected ';
        }
    }
}

// $authController = new AuthController();
// $authController->login();  // or $authController->register($name, $password, $email);

$authController = new AuthController();

if (isset($_POST['register'])){
    $authController->register();
}elseif(isset($_POST['login'])){
    $authController->login();
}

if (isset($_GET['action'])){
    $action = $_GET['action'];
    switch ($action) {
        case 'logout':
            $authController->logout();
            break;
    }
}
?>
