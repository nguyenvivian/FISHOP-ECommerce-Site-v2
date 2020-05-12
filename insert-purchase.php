<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    try{
        $conn = mysqli_connect($servername, $username, $password,'project2');
        $fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
        $lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
        $phoneNumber = mysqli_real_escape_string($conn, $_REQUEST['phoneNumber']);
        $street = mysqli_real_escape_string($conn, $_REQUEST['street']);
        $city = mysqli_real_escape_string($conn, $_REQUEST['city']);
        $state = mysqli_real_escape_string($conn, $_REQUEST['state']);
        $postalCode = mysqli_real_escape_string($conn, $_REQUEST['postalCode']);
        $shippingMethod = mysqli_real_escape_string($conn, $_REQUEST['shippingMethod']);
        $ccnumber = mysqli_real_escape_string($conn, $_REQUEST['ccnumber']);
        $ccv = mysqli_real_escape_string($conn, $_REQUEST['ccv']);
        $products = mysqli_real_escape_string($conn, $_REQUEST['products']);
        $quantity = mysqli_real_escape_string($conn, $_REQUEST['quantity']);
        // echo var_dump($_REQUEST);
        
        $sql = "INSERT INTO PRODUCT_ORDER (FIRST_NAME,LAST_NAME,PHONE_NUMBER,
        `ADDRESS`,SHIPPING_METHOD,CCN,CCV,ITEM,QUANTITY) VALUES ('$fname','$lname',
        $phoneNumber,'$street','$shippingMethod','$ccnumber',$ccv,'$products',$quantity)";
        $conn->query($sql);            

        // echo mysqli_error($conn);
            
        mysqli_close($conn);
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>FISHOP</title>
    <link rel="stylesheet" href="product-page.css">
    <link rel="stylesheet" href="main.css">
</head>

<!-- BEGIN HEADER -->
<?php echo file_get_contents("header.html"); ?>
<!-- END HEADER -->

<p> Thank you <?php echo $fname,' ',$lname?> for purchasing: <?php echo $quantity,' ', $products?> </p>
<p> We will send you updates about your order at <?php echo $phoneNumber ?> for confirmation. </p>
<p> Order shipped to <?php echo $street, ' ',$city,' ', $state, ' ',$postalCode ?> via <?php echo $shippingMethod ?>
    shipping. </p>
<p> Your credit card: <?php echo $ccnumber,' ',$ccv?> will be charged. </p>

<!-- BEGIN FOOTER -->
<?php echo file_get_contents("footer.html"); ?>
<!-- END FOOTER  $city $state $postalCode-->