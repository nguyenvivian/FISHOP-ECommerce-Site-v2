<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    try{
        $conn = mysqli_connect($servername, $username, $password,'project2');
        // echo "Connected successfully";
        $val = $_GET["val"];
        // echo $val;
        $sql1 = "SELECT * FROM PRODUCT_CARD WHERE PRODUCT_ID = $val";
        $result1 = mysqli_query($conn, $sql1);

        $products = mysqli_fetch_array($result1, MYSQLI_ASSOC);

        $sql2 = "SELECT * FROM PRODUCT_DETAIL WHERE PRODUCT_ID = $val";
        $result2 = mysqli_query($conn, $sql2);

        $product_details = mysqli_fetch_all($result2, MYSQLI_ASSOC);

        // foreach($products as $product){
        //     echo htmlspecialchars($product["NAME"]);
        // }
        $conn=null;
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

<!-- BEGIN MIDDLE -->

<div class="listing" id="<?php print_r(substr(($products['PATH']),0,(strlen($products['PATH']) - 6)))?>">
    <header><?php print_r($products['NAME'])?></header>
    <header>PURCHASE FORM</header>
    <div class="picture-carousel" id="pictureCarousel">
        <a class="prev" onclick="showPicture(-1)">
            < </a>
                <a class="next" onclick="showPicture(1)">></a>
    </div>
    <div>
        <form id="myForm" onsubmit="checkForm();return false;">
            <p class="error" id="error"></p>
            <label for="products">Select Item:</label>
            <select id="products">
                <option><?php print_r($products['NAME'])?></option>
            </select>
            <label for="quantity">Quanity:</label>
            <select id="quantity">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <label for="fname">First name:</label>
            <input type="text" id="fname">
            <label for="lname">Last name:</label>
            <input type="text" id="lname">
            <label for="phoneNumber">Phone Number (XXXXXXXXXX): </label>
            <input type="text" id="phoneNumber">
            <label for="street">Street:</label>
            <input type="text" id="street">
            <label for="city">City:</label>
            <input type="text" id="city">
            <label for="state">State:</label>
            <input type="text" id="state">
            <label for="postalCode">Postal Code (XXXXX):</label>
            <input type="text" id="postalCode">
            <label for="shippingMethod">Shipping Method:</label>
            <select id="shippingMethod">
                <option>Overnight</option>
                <option>2 Days Expedited</option>
                <option>6 Days Ground</option>
            </select>
            <label for="ccnumber">Credit Card Number (XXXXXXXXXXXXXXXX):</label>
            <input type="text" id="ccnumber">
            <label for="ccv">CCV (XXX) or (XXXX):</label>
            <input type="text" id="ccv">
            <input type="submit" id="submit">
        </form>
    </div>
    <p>PRICE (each): $<?php print_r($products['PRICE'])?></p>

</div>
<div class="extended-description">
    <?php foreach($product_details as $product_detail){ ?>
    <p><?php echo htmlspecialchars($product_detail['DETAILED_DESCRIPTION']); ?>
    </p>
    <?php } ?>

</div>
<!-- END MIDDLE -->

<!-- BEGIN FOOTER -->
<?php echo file_get_contents("footer.html"); ?>
<!-- END FOOTER -->
<script src="main.js"></script>

</html>