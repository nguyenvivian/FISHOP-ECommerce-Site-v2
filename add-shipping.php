<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    try{
        $conn = mysqli_connect($servername, $username, $password,'project2');

        $ship = $_GET['ship'];

        echo $ship;
        mysqli_close($conn);
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
?>