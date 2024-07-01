<html>
<head>
    <?php include("External Link.php") ?> 
    <style>
        :root{
            --footer_background_color:rgb(224, 146, 247);  
            --social_icons:rgb(200, 25, 253);;  
        }
        .footer_color{
            background-color: var(--footer_background_color);
            font-family: 'Playfair Display';
        }
        .social_profile li {
            margin-left: 15px;
            border: 2px solid rgb(147, 0, 192);
            margin-top: 5px;
            height: 40px;
            width: 40px;
            border-radius: 50%;
        }
        .social_profile i {
            position: relative;
            left: 7px;
            top: 6px;
        }
        .social_profile li:hover {
            background-color: #34003e;
        }
    </style>
</head>
<body>
    <footer>
    	<div class="container-fluid footer_color">
        <div class="row">
            <div class="col-6">
                <h5 class="fw-bold fs-3">Sweet Shop</h5>
                <p>Delighted and delicious</p>
            </div>
            <div class="col-6">
                <div class="social_profile">
                    <ul class="list-none flex">
                        <li><a href="#"><i class="fab fa-facebook-f fa-xl" style="color: var(--social_icons);"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter fa-xl" style="color: var(--social_icons);"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g fa-xl" style="color: var(--social_icons);"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram fa-xl" style="color: var(--social_icons);"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="border-b-2 border-gray-900"></div>
            <div class="contain"> 
                <div class="row">
                    <div class="col-3">
                        <h5 class="fw-bold fs-4">Address</h5>
                        <div class="row">
                            <div class="col">
                                <a href=""><i class="fa-solid fa-location-dot" style="color: var(--social_icons);"></i></a>
                            </div>
                            <div class="col">
                                <p>9 Krishna Nagar,
                                    Beawar,Rajasthan
                                    India
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href=""><i class="fa-solid fa-phone" style="color: var(--social_icons);"></i></a>
                            </div>
                            <div class="col">
                                <p>+91_1212121212
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href=""><i class="fa-regular fa-paper-plane" style="color: var(--social_icons);"></i></a>
                            </div>
                            <div class="col">
                                <p>info@domain.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h5 class="fw-bold fs-4">Latest News</h5>
                        <div class="row">
                            <div class="col">
                                <img class="h-75 w-75" src="../Images/Latest News.avif">
                            </div>
                            <div class="col">
                                <h6 class="fw-bold">Even the all-powerful Pointing has no control about</h6>
                                <p>Oct 18, 2024</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img class="h-75 w-75" src="../Images/Latest News 2.webp">
                            </div>
                            <div class="col">
                                <h6 class="fw-bold">Even the all-powerful Pointing has no control about</h6>
                                <p>Oct 18, 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h5 class="fw-bold fs-4">Best Sellers</h5>
                        <img class="h-50 w-75" src="../Images/Smokey Green Crumb.jpg">
                        <h6 class="mt-2 fw-bold">Smokey Green Crumb</h6>
                        <span class="fa fa-star text-amber-500"></span>
                        <span class="fa fa-star text-amber-500"></span>
                        <span class="fa fa-star text-amber-500"></span>
                        <span class="fa fa-star text-amber-500"></span>
                        <span class="fa fa-star text-amber-500"></span>
                    </div>
                    <div class="col-3">
                        <h5 class="fw-bold fs-4">Instagram</h5>
                        <img class="h-50 w-100" src="../Images/Instagram Image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="border-b-2 border-gray-900"></div>
            <p class="text-center mb-1">Copyright &copy;2024 All Rights Reserved</p>
        </div>
   	</div>
    </footer>
</body>
</html>