<html>
<?php
    ob_start();
    session_start();	
?>
<head>
   
    <title>Special Offers</title>
    <?php include("External Link.php"); ?>
    <style>
        /* Donut Special Offers */

        .so_body{
            background-image: url("../Images/Product_BG.jpg");
            background-size: cover;
        }

        .so_custom_border {
            border: 2px dashed rgb(200, 25, 253);
            margin-top: 2px;
            margin-left: 55px;
            margin-bottom: 20px;
            overflow: hidden;
            height: 300px;
            border-radius: 2px;
        }

        .so_row {
            display: flex;
        }

        .custom_image_size {
            height: 300px;
            width: 500px;
            opacity: 40%;
        }

        .donut_img {
            position: absolute;
            bottom: 230px;
            height: 250px;
            width: 250px;
        }

        .so_text {
            position: absolute;
            width: 450px;
            top: 330px;
            right: 655px;
            border-top: 2px solid rgb(147, 0, 192);
        }

        .free_donut {
            position: absolute;
            font-size: 50px;
            color: #6e0032;
            font-family: 'Workbench';
            top: 190px;
            right: 720px;
            transform: rotate(13deg);
        }

        .small_free_donut {
            position: absolute;
            font-family: 'Honk';
            top: 235px;
            right: 750px;
            font-size: 25px;
            transform: rotate(13deg);
        }

        .star {
            background-color: rgb(225, 113, 132);
            height: 180px;
            width: 250px;
            position: absolute;
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
            bottom: 270px;
            right: 650px;
            transform: rotate(20deg);
            z-index: -1;
        }

        /* Cupcake Offers */
        .cupcake {
            position: absolute;
            top: 150px;
            left: 650px;
            height: 190px;
            width: 190px;
            transform: rotate(10deg);
            z-index: -1;
        }

        .cupcake_text {
            position: absolute;
            font-size: 40px;
            color: rgb(242, 154, 255);
            font-family: 'Single Day';
            top: 160px;
            left: 900px;
            transform: rotate(10deg);
        }

        .small_cupcake_text {
            position: absolute;
            font-family: 'Cute Font';
            color: rgb(76, 0, 65);
            top: 190px;
            right: 225px;
            font-size: 25px;
            font-weight: bold;
            transform: rotate(10deg);
        }

        .nonagon {
            clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%);
            position: absolute;
            background-color: rgb(232, 83, 83);
            height: 80px;
            width: 210px;
            transform: rotate(10deg);
            top: 150px;
            left: 850px;
            z-index: -1;
        }

        .c_text {
            position: absolute;
            width: 450px;
            top: 330px;
            right: 135px;
            border-top: 2px solid rgb(147, 0, 192);
        }

        /* Cupcake offer ends */

        /* Coupon */
        .coupon {
            z-index: 1;
            position: absolute;
            top: 432px;
        }

        .edited {
            padding: 2px 16px;
            background-color: #f1f1f1;
        }

        .promo {
            background: #ccc;
            padding: 3px;
        }

        .expire {
            color: red;
        }
    </style>
</head>

<body class="so_body" >
<?php
include('Header.php')
?>
    <div class="container ">
        <!-- First Row Starts -->
        <div class="so_row">
            <div class="col-5 so_custom_border">
                <div>
                    <img class="custom_image_size"
                        src="../Images/Offer_BG1.avif">
                    <p class="free_donut">FREE</p>
                    <p class="small_free_donut">donut</p>
                    <div class="star"></div>
                    <img class="donut_img" src="../Images/Offer_1.png">
                    <p class="so_text">Craving sweet escape?We've got u covered with our irresistible FREE donut offer! Savor the moment with freshly baked treats that r perfect blend of soft, fluffy,
                        and downright delicious.</p>
                </div>
            </div>
            <div class="col-5 so_custom_border">
                <div>
                    <img class="custom_image_size"
                        src="../Images/Offer_BG2.avif">
                    <img class="cupcake" src="../Images/Offer_2.jpg">
                    <p class="cupcake_text">20% OFF</p>
                    <div class="small_cupcake_text">Hurry Up</div>
                    <div class="nonagon"></div>
                    <p class="c_text">Enjoy a sweet 20% OFF at our shop! Indulge ur taste buds with our delectable treats nd save big! For a limited time, we're delighted to offer an exclusive 20% off on your entire purchase.</p>

                </div>
            </div>
        </div>
        <!-- First Row Ends -->

        <!-- Second Row Starts -->
        <div class="so_row ">
            <div class="col-5 so_custom_border">
                <img class="custom_image_size"
                    src="../Images/Offer_BG3.jpg">
                <div class="coupon">
                    <div class="container text-center">
                        <h3 style="color: #6e0032;">Buy 1 Get 1 free</h3>
                    </div>
                    <img src="../Images/Offer_3.jpg" style="height: 145px; width:50%;margin-left: 110px;">
                    <div class="container" style="background-color:white">
                        <h2 style="color: #6c0087; margin-left: 35px; margin-top: 4px;"><b>20% OFF YOUR PURCHASE</b>
                        </h2>
                    </div>
                    <div class="container">
                        <p>Use Promo Code: <span class="promo">BOH232</span></p>
                        <p class="expire">Expires: Jan 03, 2025</p>
                    </div>
                </div>
            </div>
            <div class="col-5 so_custom_border">
                <img class="custom_image_size"
                    src="../Images/Offer_BG4.avif">
                <div class="coupon">
                    <div class="container text-center">
                        <h3 style="color: #6e0032;">Buy 2 Get Premium Free</h3>
                    </div>
                    <img src="../Images/Offer_4.jpg" style="height: 145px; width:50%;margin-left: 110px;">
                    <div class="container" style="background-color:white">
                        <h2 style="color: #6c0087; margin-left: 35px; margin-top: 4px;"><b>20% OFF YOUR PURCHASE</b>
                        </h2>
                    </div>
                    <div class="container">
                        <p>Use Promo Code: <span class="promo">MS5690</span></p>
                        <p class="expire">Expires: March 09, 2025</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second Row Ends -->
    </div>
    <?php include('Footer.php') ?>
</body>

</html>