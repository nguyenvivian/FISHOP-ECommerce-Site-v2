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
        <form id="myForm" action="insert-purchase.php" method="post" onsubmit="return checkForm();">
            <p class="error" id="error"></p>
            <label for="products">Select Item:</label>
            <select id="products" name="products">
                <option><?php print_r($products['NAME'])?></option>
            </select>
            <label for="quantity">Quantity:</label>
            <select id="quantity" name="quantity">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname">
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname">
            <label for="phoneNumber">Phone Number (XXXXXXXXXX): </label>
            <input type="text" id="phoneNumber" name="phoneNumber">
            <label for="postalCode">Postal Code (XXXXX):</label>
            <input type="text" id="postalCode" name="postalCode"
                onblur="calcTax(this.value, <?php print_r($products['PRICE']) ?>)">
            <label for="street">Street:</label>
            <input type="text" id="street" name="street">
            <label for="city">City:</label>
            <input type="text" id="city" name="city">
            <label for="state">State:</label>
            <input type="text" id="state" name="state">
            <label for="shippingMethod">Shipping Method:</label>
            <select id="shippingMethod" name="shippingMethod">
                <option>Overnight</option>
                <option>2 Days Expedited</option>
                <option>6 Days Ground</option>
            </select>
            <label for="ccnumber">Credit Card Number (XXXXXXXXXXXXXXXX):</label>
            <input type="text" id="ccnumber" name="ccnumber">
            <label for="ccv">CCV (XXX) or (XXXX):</label>
            <input type="text" id="ccv" name="ccv">
            <label for="total">Total Price + Tax Rate (<a id='taxrate' name='taxrate'></a>): </label>
            <a id="total" name="total"></a>
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
<script src="tax.js"></script>

</html>