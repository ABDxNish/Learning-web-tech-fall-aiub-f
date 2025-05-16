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
        $_SESSION['status']=true;
        header('Location: LoginSuccess.php');
       exit();
    }
} 
 else {
    echo "Invalid user";
}
?>
