<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>massages</title>
</head>
<body>
    <?php
    require_once(__DIR__ . '/../../controlle/controlle.php');        
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
 
    echo $_SESSION['id'];
    if($_SESSION['id']!=100){
        header('Location:' . '../../');
    }
    $authController = new AuthController();
     
    foreach ($authController->messages() as $messageArray) {
        $res = $authController->getemail($messageArray['user_id']);
        if ($res && $row = $res->fetch_assoc()) {
            $email = $row['email'];
            echo $email . ' ' . $messageArray['message'] . '<br>';
        } else {
            echo "Error fetching email for user ID: " . $messageArray['user_id'] . '<br>';
        }
    }
    
    
    
?>
</body>
</html>