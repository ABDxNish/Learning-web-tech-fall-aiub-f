<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Login Succeed</p>
    <a href="Logout.php">Logout</a>

</body>
</html>
<?php
    }else{
        header('location: Login.html');
    }

?>