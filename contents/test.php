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
        <h1>Test</h1>
        <h2>Example1</h2>
        <ul>
            <li>instrunction1</li>
            <li>instrunction2</li>
        </ul>

        <h2>Example2</h2>
        <ul>
            <li>instrunction1</li>
            <li>instrunction2</li>
        </ul>
    </div>
</body>
