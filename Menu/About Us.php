<?php
    ob_start();
    session_start();	
?>
<html>
<head>
    <title>About Us</title>
    <?php include("External Link.php"); ?>
    <style>
        /*Website Screen*/
        .about_bg {
            background-image: url("../Images/Product_BG.jpg");
            background-size: cover;
        }
        /*  Bakery Info  */
        .Info {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin-top: 40px;
        }
        .BG-Image {
            margin-top: 35px;
            margin-bottom: 35px;
            width: 550px;
            height: 500px;
            filter: drop-shadow(-8px 8px 7px black);
        }
        .Head-Text {
            margin-top: 70px;
            font-family: "Libre-Baskerville";
            font-weight: bold;
            font-style: oblique;
            font-size: 38px;
            color: rgb(85, 67, 119);
        }
        .Description {
            margin-top: 50px;
            font-size: 28px;
            font-family: "Dancing Script";
            color: rgb(42, 48, 57);

        }
        /* Gallery And Reviews Heading */
        .Heading {
            text-align: center;
            font-family: Georgia;
            margin: 40px;
            font-size: 40px;
        }
        .Heading span {
            font-family: "Merienda";
            color: orangered;
        }
		/* Gallaery */
        .Gallery {
            margin-bottom: 60px;
            max-width: max-content;
            justify-content: center;
        }
        .First-row, .Third-row {
            width: 600px;
            height: 450px;
            margin-top: 4px;
            margin-bottom: 4px;
        }
        .Second-row {
            width: 392px;
            height: 300px;
            margin-top: 4px;
            margin-bottom: 4px;
        }
        /*  Reviews */
        figure.snip1157 {
            font-family: 'Raleway', Arial, sans-serif;
            position: relative;
            overflow: hidden;
            margin: 10px;
            min-width: 220px;
            max-width: 310px;
            width: 100%;
            color: #333;
            text-align: left;
            box-shadow: none !important;
        }
        figure.snip1157 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
            transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
        }
        figure.snip1157 img {
            max-width: 100%;
            vertical-align: middle;
            height: 90px;
            width: 90px;
            border-radius: 50%;
            margin: 40px 0 0 10px;
        }
        figure.snip1157 blockquote {
            display: block;
            border-radius: 8px;
            position: relative;
            background-color: #fafafa;
            padding: 25px 50px 30px 50px;
            font-size: 0.8em;
            font-weight: 500;
            margin: 0;
            line-height: 1.6em;
            font-style: italic;
        }
        figure.snip1157 blockquote:before,
        figure.snip1157 blockquote:after {
            font-family: 'FontAwesome';
            content: "\201C";
            position: absolute;
            font-size: 50px;
            opacity: 0.3;
            font-style: normal;
        }
        figure.snip1157 blockquote:before {
            top: 25px;
            left: 20px;
        }
        figure.snip1157 blockquote:after {
            content: "\201D";
            right: 20px;
            bottom: 0;
        }
        figure.snip1157 .arrow {
            top: 100%;
            width: 0;
            height: 0;
            border-left: 0 solid transparent;
            border-right: 25px solid transparent;
            border-top: 25px solid #fafafa;
            margin: 0;
            position: absolute;
        }
        figure.snip1157 .author {
            position: absolute;
            bottom: 45px;
            padding: 0 10px 0 120px;
            margin: 0;
            text-transform: uppercase;
            color: #ffffff;
            -webkit-transform: translateY(50%);
            transform: translateY(50%);
        }
        figure.snip1157 .author h5 {
            opacity: 0.8;
            margin: 0;
            font-weight: 800;
        }
        figure.snip1157 .author h5 span {
            font-weight: 400;
            text-transform: none;
            padding-left: 5px;
        }
        .review_body {
            background-color: #212121;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-flow: wrap;
            margin: 0;
            height: 100%;
        }
        .Heading {
            text-align: center;
            font-family: "Libre-Baskerville";
            margin: 40px;
            font-size: 40px;
        }
        .Heading span {
            font-family: "Merienda";
            color: orangered;
        }
        .review_container{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body class="about_bg">
	<?php include('Header.php') ?>
    <!--Bakery Intro-->
    <div class="container-fluid">
        <div class="Info">
            <div class="col-6">
                <img class="BG-Image" src="../Images/Intro_Image_2.avif">
            </div>
            <div class="col-4 ">
                <h2 class="Head-Text">Why Chosse Us ?</h2>
                <p class="Description">Love cake? So do we. Here, in SWEET CAKES we prepare all our products with love and passion with most fresh ingredients.<br /><br /> Our goal is not only to bake, it is about making memories and delivering happiness with a lot of sweetness. </p>
            </div>
        </div>
    </div>

    <!--Gallery-->
    <div class="container-fluid">
        <h2 class="Heading">Our <span>Gallery</span></h2>
        <div class="container Gallery">
            <div class="row">
                <div class="col-md-6"><img src="../Images/Gallery_1.jpg" class="First-row"></div>
                <div class="col-md-6"><img src="../Images/Gallery_2.jpg" class="First-row"></div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4"><img src="../Images/Gallery_3.jpg" class="Second-row"></div>
                <div class="col-6 col-md-4"><img src="../Images/Gallery_4.jpg" class="Second-row"></div>
                <div class="col-6 col-md-4"><img src="../Images/Gallery_5.avif" class="Second-row"></div>
            </div>
            <div class="row">
                <div class="col-6"><img src="../Images/Gallery_6.jpg" class="Third-row"></div>
                <div class="col-6"><img src="../Images/Gallery_7.jpg" class="Third-row"></div>
            </div>
        </div>
    </div>
    <h2 class="Heading">Customer <span>Reviews</span></h2>
    <div class="container-fluid review_container">
        <figure class="snip1157">
            <blockquote>Calvin: Dazzling flavors and impeccable craftsmanship at Sweet Cake. Irresistible tarts, divine pastries, and artisanal breads. A symphony of taste and aesthetics. A must-visit for culinary enthusiasts!
                <div class="arrow"></div>
            </blockquote>
            <img src="../Images/Review_DP1.jpg"/>
            <div class="author">
                <h5>Pelican Steve <span>Little's</span></h5>
            </div>
        </figure>
        <figure class="snip1157 hover">
            <blockquote>Dazzling flavors and impeccable craftsmanship at Sweet Cake. Irresistible croissants, divine pastries, and artisanal breads. A symphony of taste and aesthetics. A must-visit for culinary enthusiasts!
            	<div class="arrow"></div>
            </blockquote>
            <img src="../Images/Review_DP2.jpg"/>
            <div class="author">
                <h5>Max Conversion<span>Cakes</span></h5>
            </div>
        </figure>
        <figure class="snip1157">
            <blockquote>Indulged in Sweet Cake's masterpieces – ethereal macrons, divine pastries, and artisanal wonders. Each bite was poetry, a testament to their artistry. Pure, unadulterated delight!
                <div class="arrow"></div>
            </blockquote>
            <img src="../Images/Review_DP3.jpg"/>
            <div class="author">
                <h5>Eleanor Faint<span>Macron</span></h5>
            </div>
        </figure>
    </div>
    
    <?php include('Footer.php') ?>

</body>
</html>