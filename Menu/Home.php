<html>
<head>
    <title>Sweet Cake</title>
	<?php include("External Link.php"); ?>   
    <link rel="stylesheet" href="../Stylesheet/Home.css">
</head>
<?php include('Header.php') ?>
<body>
    <div class="container-fluid">
        <div class="row Intro">
            <div class="col-4 Text">
                <h2 class="Heading">Welcome To<br /><span>Sweet Cakes</span></h2>
                <p class="Desc">There's nothing a cupcake and coffee can't solve.</p>
            </div>
            <div class="col-6">
                <img class="Image" src="../Images/Intro_Image.avif">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="Product-Container">
            <div id="carouselExampleSlidesOnly" class="carousel slide Product-Carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../Images/Product_1.webp" class="d-block Product-img">
                        <p class="Product-Quote">" Come Experience The Taste Of Joy "</p>
                    </div>
                    <div class="carousel-item">
                        <img src="../Images/Product_2.avif" class="d-block Product-img">
                        <p class="Product-Quote">" Filled Happiness In Every Slice Of Cake "</p>
                    </div>
                    <div class="carousel-item">
                        <img src="../Images/Product_3.jpg" class="d-block Product-img">
                        <p class="Product-Quote">" The Bakery That Feeds The Soul "</p>
                    </div>
                    <div class="carousel-item">
                        <img src="../Images/Product_4.jpg" class="d-block Product-img">
                        <p class="Product-Quote">" The Taste Of Home-Baked Goodeness "</p>
                    </div>
                    <div class="carousel-item">
                        <img src="../Images/Product_5.avif" class="d-block Product-img">
                        <p class="Product-Quote">"The Taste You Have Been Lokking For"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="row Info-Container">
        <div class="col-2 Items1"><img class="Items1-img" src="../images/Ingredients.jpg"></div>
        	<div class="col-2 Items2">
                <p class="Caption">FRESH INGREDIENTS</p>
                <p class="Detail">All of our products are made with fresh quality ingredients.</p>
            </div>        
        <div class="col-2 Items1"><img class="Items1-img" src="../images/Baked Product.jpg"></div>
            <div class="col-2 Items2">
                <p class="Caption">BAKED WITH LOVE</p>
                <p class="Detail">We are passionate about baking . Each of our handmade items are carefully baked.</p>
            </div>
            <div class="col-2 Items1"><img class="Items1-img" src="../images/Delivery.jpg"></div>
            <div class="col-2 Items2">
                <p class="Caption">ONLINE DELIVERY</p>
                <p class="Detail">We are very punctual and promise to deliver fresh made products to everyone.</p>
            </div>
        </div>
        
    <div class="container-fluid">
        <h2 class="Heading2">Most Popular</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-3">
            <div class="col Products-Info">
                <img src="../Images/Item1.jpg" class="Dessert-Image">
                <p class="Dessert-Name">Blueberry Cheesecake Jar</p>
            </div>
            <div class="col Products-Info">
                <img src="../Images/Item2.jpg" class="Dessert-Image">
                <p class="Dessert-Name">Strawberry Jelly Roll</p>
            </div>
            <div class="col Products-Info">
                <img src="../images/Item3.jpg" class="Dessert-Image">
                <p class="Dessert-Name">Candy bar Chocolate Trifle</p>
            </div>
            <div class="col Products-Info">
                <img src="../images/Item4.jpg" class="Dessert-Image">
                <p class="Dessert-Name">Red Velvet Stack</p>
            </div>
        </div>
    </div>
        
</body>
<?php include('Footer.php') ?>
</html>