<?php
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<head> <link rel="stylesheet" href="./style.css"> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu"> </head>
<style> 
body {
    font-family: "Ubuntu", sans-serif;
}
</style>
<body>
    <div class = "text">
        <h1>Contents:</h1>
        <ul>
            <li><a href="./zoom.php" style="font-size:20px">Test</a></li>
        </ul>
        <h1><a href="../end_session.php" style="font-size:20px">End Session</a></h1>
    </div>
</body>
