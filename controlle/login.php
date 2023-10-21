<?php
    session_start();
?>
    <?php 
    require_once '../model/database.php';
    $dbModel = new DatabaseModel();

    if($dbModel->isconnected){
        // if ($dbModel->register('abdo' , 'salah1' , 'abdx@gmail.com')){
        //     echo 'good'.'<br>'; 
        // }else{
        //     echo 'bad' .'<br>';
        // }
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
            header("Location: ../view/login"); 
        }

    }else{
        echo'dbModel is not connected ';
    }
    // setcookie('username',$name , time()+20 ,'/');
    // setcookie('password',$name , time()+20 ,'/'); 

    ?>
