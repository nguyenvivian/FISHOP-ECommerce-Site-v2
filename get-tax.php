<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    try{
        $conn = mysqli_connect($servername, $username, $password,'project2');
        $zip = $_GET['zip'];
        $sql1 = "SELECT * FROM TAX_RATES WHERE ZipCode = $zip";
        $result1 = mysqli_query($conn, $sql1);
        $tax_details = mysqli_fetch_all($result1, MYSQLI_ASSOC);
        
        echo json_encode($tax_details[0]);
        // print (floatval($tax_details[0]['CombinedRate']));
        // print ($tax_details[0]['CombinedRate']);
        // print($tax_details[0]['State']);
    
        mysqli_close($conn);
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
?>