<?php
    session_start();
    
    $_PASSWORD = "Your Password";





    if ((string) $_POST["password"] == $_PASSWORD) {
        $_SESSION['login'] = true;
    }
    
    if (isset($_SESSION['login'])) {
        echo "success";
        header("Location: ./contents/table.php");
    }
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./style.css"> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu"> </head>
    <style> 
    body {
        font-family: "Ubuntu", sans-serif;
    }
    </style>
<body> <center> 
    <img src="./img/lock.png" class = "lock">
    <br>
    <strong><div class = "text"> LOCKED </div></strong>
    <br>
    <form action="./index.php" method="post">
        <input class = "passfield" type="password" name="password" placeholder="" required="true">
        <button class = "btnfield">ㅤ</button>
    </form>
</center></body>
