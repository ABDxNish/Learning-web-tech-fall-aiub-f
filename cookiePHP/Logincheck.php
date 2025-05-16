<?php
session_start();

if (isset($_POST['submit'])) {
    $userName = trim($_POST['uname']);
    $password = trim($_POST['pass']);

    if ($userName == $password) {
        echo "Password cannot be the same as username";
    } 
    else if($userName==""|| $password==""){
        echo "Fill all the component";
    }
    
    else {
        setcookie('status', 'true', time()+3000, '/');
        header('Location: LoginSuccess.php');
       
    }
} 
 else {
    echo "Invalid user";
}
?>
