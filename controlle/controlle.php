<?php

require_once __DIR__ . '/../model/database.php';

class AuthController {
    private $dbModel;
    public function __construct() {
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
                header("Location: ../view/login?register=you%20have%20been%20registerd");
            } else {
                header("Location: ../view/register?error=Registration%20failed,%20please%20try%20again");
            }
        } else {
            echo 'dbModel is not connected ';
        }
    }
    public function message(){
        if(!isset( $_POST['message'])){
            return; 
        }
        if (!$this->dbModel->isconnected) {
            return;
        }
        $res= $this->dbModel->message1($_POST['message']);
        
        if ($res) {
            header('Location: ../?state=massage%20have%20been%20sent');
        }
        }
    public function messages() {
        return $this->dbModel->messages();
    }
    public function getemail($id){
        return $this->dbModel->getemail($id);
    }
    public function deleteMessage(){
        if (isset( $_POST['id'] )){
             $this->dbModel->deleteMessage($_POST['id']);
             header('Location: /s412117701p/view/Contactme/');
        }
        
    }
    }

if (isset($_POST['register'])){
    $authController = new AuthController();
    $authController->register();
}elseif(isset($_POST['login'])){
    $authController = new AuthController();
    $authController->login();
}elseif(isset($_POST['message'])){
    $authController = new AuthController();
    $authController->message();
}elseif(isset($_POST['delete'])){
    $authController = new AuthController();
    $authController->deleteMessage();
}

if (isset($_GET['action'])){
    $authController = new AuthController();
    $action = $_GET['action'];
    switch ($action) {
        case 'logout':
            $authController->logout();
            break;
    }
}
?>
