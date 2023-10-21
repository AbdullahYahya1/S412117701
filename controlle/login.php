<?php
    session_start();
?>
    <?php 
    require_once __DIR__ . '/../model/database.php';
    $dbModel = new DatabaseModel();
    if($dbModel->isconnected){
        $username = $_POST['PHP_AUTH_USER'];
        $password = $_POST['PHP_AUTH_PW']; 
        $id = $dbModel->login($username,$password);
        if($id){
            $_SESSION['name']=$username;
            $_SESSION['id']=$id;
            header("Location: ../"); 
        }else{
            $_SESSION = array();
            session_destroy();
            header("Location: ../view/login?stat=1"); 
        }
    }else{
        echo'dbModel is not connected ';
    }
    // setcookie('username',$name , time()+20 ,'/');
    // setcookie('password',$name , time()+20 ,'/'); 
    ?>


