<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    try{
        $conn = mysqli_connect($servername, $username, $password,'project2');
        // echo "Connected successfully";
        $sql = "SELECT * FROM PRODUCT_CARD";

        $result = mysqli_query($conn, $sql);

        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_close($conn);
        // foreach($products as $product){
        //     echo htmlspecialchars($product["NAME"]);
        // }
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html>

<!-- BEGIN HEADER -->
<?php echo file_get_contents("header.html"); ?>
<!-- END HEADER -->

<!-- BEGIN MIDDLE SECTION -->
<div class="grid-container">
    <!-- BEGIN LEFT NAVIGATION PANEL -->
    <div class="left" id="left-nav">
        <header>SHOP</header>
        <a class="left-nav" href="#fish-food">FISH FOOD</a>
        <a class="left-nav" href="#live-fish">LIVE FISH</a>
    </div>
    <!-- END LEFT NAVIFATION PANEL -->

    <div class="middle">
        <!-- BEGIN FISH FOOD CATEGORY -->
        <div class="product-header" id="fish-food">FISH FOOD</div>
        <div class="product">
            <?php foreach($products as $product){ ?>
            <?php if (strpos($product['PATH'], "fish-food")){ ?>
            <div class="product-card">
                <a href="product-page.php?val=<?php echo $product['PRODUCT_ID']; ?>">
                    <div>
                        <img src="<?php echo $product['PATH']; ?>" style="<?php echo $product['DIMENSION']; ?>">
                        <product-name><?php echo htmlspecialchars($product['NAME']); ?></product-name>
                        <product-price><?php echo htmlspecialchars($product['PRICE']); ?></product-price>
                        <product-description><?php echo htmlspecialchars($product['DESCRIPTION']); ?>
                        </product-description>
                        <product-description><?php echo htmlspecialchars($product['WEIGHT']); ?></product-description>
                        <p><button>More Details</button></p>
                    </div>
                </a>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
        <!-- END FISH FOOD CATEGORY -->
        <!-- BEGIN LIVE FISH CATEGORY -->
        <div class="product-header" id="live-fish">LIVE FISH</div>
        <div class="product">
            <?php foreach($products as $product){ ?>
            <?php if (strpos($product['PATH'], "live-fish")){ ?>
            <div class="product-card">
                <a href="product-page.php?val=<?php echo $product['PRODUCT_ID']; ?>">
                    <div>
                        <img src="<?php echo $product['PATH']; ?>" style="<?php echo $product['DIMENSION']; ?>">
                        <product-name><?php echo htmlspecialchars($product['NAME']); ?></product-name>
                        <product-price><?php echo htmlspecialchars($product['PRICE']); ?></product-price>
                        <product-description><?php echo htmlspecialchars($product['DESCRIPTION']); ?>
                        </product-description>
                        <product-description><?php echo htmlspecialchars($product['WEIGHT']); ?></product-description>
                        <p><button>More Details</button></p>
                    </div>
                </a>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
        <!-- END LIVE FISH CATEGORY -->

    </div>
</div>
<!-- END MIDDLE SECTION -->

<!-- BEGIN FOOTER -->
<?php echo file_get_contents("footer.html"); ?>
<!-- END FOOTER -->

</html>