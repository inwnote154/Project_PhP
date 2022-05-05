<?php
    include('Database/server.php');  
    session_start();
    $id = $_GET["id"];
    $_SESSION["id"] = $id;

    //echo $_SESSION["id"];
    header("location: register.php");
?>