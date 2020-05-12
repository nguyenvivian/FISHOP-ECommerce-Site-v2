<!DOCTYPE html>
<html>

<head>
    <title>FISHOP</title>
    <link rel="stylesheet" href="main.css">
</head>

<!-- BEGIN HEADER -->
<?php echo file_get_contents("header.html"); ?>
<!-- END HEADER -->

<!-- BEGIN MIDDLE SECTION -->
<div class="grid-container">
    <!-- BEGIN LEFT NAVIGATION PANEL -->
    <div class="left" id="left-nav">
        <header>ABOUT</header>
        <a class="left-nav" href="#who-are-we">WHO ARE WE</a>
        <a class="left-nav" href="#what-we-sell">WHAT WE SELL</a>
        <a class="left-nav" href="#management-team">MANAGEMENT TEAM</a>
        <a class="left-nav" href="#location">LOCATION</a>
        <a class="left-nav" href="#citations">CITATIONS</a>
    </div>
    <!-- END LEFT NAVIFATION PANEL -->
    <div class="middle ">
        <div class="about grid-container" id="who-are-we">
            <div class="left">
                <img src="img/about/local-fish-store.jpg" style="width: 100%;">
            </div>
            <div class="middle">
                <description-title>WHO ARE WE?</description-title>
                <description-body>FISHOP is the #1 online fish supply retailer in the west coast. We ethically
                    breed all of our exotic fish and aquatic sea creatures in-house and have reached over 67,000
                    customers since our opening in 2020.
                </description-body>
            </div>
        </div>

        <div class="about grid-container" id="what-we-sell">
            <div class="left">
                <description-title>WHAT WE SELL</description-title>
                <description-body>FISHOP sells a variety of fish and aquatic products. We stock exotic fish from
                    bubble-eyed goldfish to halfmoon lobsters. We also carry several different brands of high-quality
                    fish food.
                </description-body>
            </div>
            <div class="middle">
                <img src="img/about/swimming-fish.gif" style="width: 100%;">
            </div>
        </div>

        <div class="about grid-container" id="management-team">
            <div class="left mgmt">
                <img src="img/about/vivian.jpg" style="width: 70%;">
            </div>
            <div class="middle">
                <description-title>MANAGEMENT TEAM</description-title>
                <description-body>FISHOP was founded by Vivian Nguyen in 2020. She continues to maintain this e-commerce
                    business.
                </description-body>
            </div>
        </div>

        <div class="about grid-container" id="location">
            <div class="left">
                <description-title>LOCATION</description-title>
                <description-body>FISHOP is based in Southern California. Headquarters and storefront can be found at
                    123 Pacific Ocean, Irvine CA 92612. Hours are 8AM - 5PM M-F.
                </description-body>
            </div>
            <div class="middle">
                <img src="img/about/irvine.png" style="width: 70%;">
            </div>
        </div>

        <div class="about grid-container" id="citations">
            <div class="left mgmt">
            </div>
            <div class="middle">
                <description-title>CITATIONS</description-title>
                <description-body>All fish food images, descriptions, and prices sourced from Amazon.com.
                </description-body>
                <description-body>All live fish images as well as their information are sourced from
                    https://aquariumfish.ecwid.com/.</description-body>
                <description-body>Storefront images are from Vivid Aquarium on Youtube.</description-body>
                <description-body>What we sell images are sourced from the Monterey Bay Aquarium.</description-body>
                </description-body>
            </div>
        </div>
    </div>
</div>
<!-- END MIDDLE SECTION -->

<!-- BEGIN HEADER -->
<?php echo file_get_contents("footer.html"); ?>
<!-- END HEADER -->

</html>