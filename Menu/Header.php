<?php
    ob_start();
   
    if(!isset($_SESSION))
    {
    	session_start();				
    }
	$User = $_SESSION['User'];
?>
<html>
<head>
    <?php include("External Link.php") ?>    
    <style>
        :root {
            --header_color: rgb(224, 146, 247);
            --secondary_header: rgb(200, 25, 253);
            --header_hover_text: rgb(200, 25, 253);
            --header_text: rgb(224, 146, 247);
            --search_text: rgb(147, 0, 192);
            --search_text_hover: rgb(147, 0, 192);
            --search_input_text: rgb(200, 25, 253);
            --hover_line: rgb(200, 25, 253);
        }
        .main_header {
            max-width: 100%;
        }
        .logo {
            position: relative;
            height: 7rem;
            width: 7rem;
            margin-top: -11.8rem;
            margin-left: 35rem;
            border: 3px solid rgb(200, 25, 253);
            border-radius: 100%;
            object-fit: cover;
        }
        header {
            font-family: 'Playfair Display';
        }
        .extra_header {
            box-shadow: 1px 1px 4px 0px;
        }
        .header_container {
            margin-top: 0px;
            background-color: var(--header_color);
            box-shadow: 1px 1px 4px 0px;
        }
        .image {
            height: 25px;
            display: block;
            margin-right: auto;
            margin-left: auto;
        }
        .header_row, .header_col {
            height: 3rem;
        }
        .text {
            text-decoration: none;
            color: rgb(147, 0, 192);
        }
        .text:hover {
            color: var(--header_hover_text);
        }
        .text_image {
            text-decoration: none;
            color: var(--search_text);
        }
        .text_image:hover {
            color: var(--search_text_hover);
        }
        .search {
            background-color: var(--header_color);
            color: var(--search_text);
            width: 6rem;
            border-radius: 5px;
            border: 2px solid var(--header_color);
        }
        .search:hover {
            background-color: var(--search_text);
            color: var(--header_color);
            border: 2px solid var(--search_text);
            border-radius: 0;
        }
        .search_input {
            letter-spacing: 0.5px;
            text-align: center;
        }
        .search_input[placeholder] {
            border: 1px solid var(--header_hover_text);
        }
        .search_input::placeholder {
            color: var(--search_input_text);
        }
        .search_input:focus::placeholder {
            color: var(--search_text_hover);
        }
        .cart{
            position: relative;
        }
        .cart_image{
        	margin-top: 14px;
        	margin-left:20px;	
        }
        .cart::before{
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            height: 3px;
            width: 100%;
            transition: 0.3s;
            border-radius: 25px;
            transform: scaleX(0);
            background-color: var(--hover_line);
        }
        .cart:hover:before{
            transform: scaleX(1);
        }
        .header_first {
            background-color: var(--secondary_header);
            border: 2px solid var(--secondary_header);
            height: 25px;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .m{
            text-decoration: none;
            color: black;        }
    </style>
</head>
<body class="main_header">
    <div class="container-fluid extra_header">
        <div class="header_first row"></div>
    </div>
    <header>
        <div class="container-fluid header_container">
            <div class="row h-12 flex items-center justify-center">
                <div class="header_col col-md-2 col-lg-2">
                    <div class="row1">
                        <div class="col1">
                            <a href="../Menu/Home.php">
                            	<img class="image" src="../Images/Home.png">
                            </a>
                        </div>
                        <div class="col2">
                            <a class="text" href="../Menu/Home.php">
                                <p class="text-center">Home</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header_col col-md-2 col-lg-2">
                    <div class="row">
                        <div class="dropdown inline-block relative">
                        	<a href=""><img class="image" src="../Images/Product.png"></a>
                            <a href="" class="text">
                                <p class="text-center">Products</p>
                            </a>
                            <ul class="dropdown-menu text-gray-700">
                                <li><a class="text-neutral-900 no-underline rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="../Cake/BundtCake.php">Cakes</a></li>
                                <li><a class="text-neutral-900 no-underline rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="../Biscuit/Macron.php">Biscuits</a></li>
                                <li><a class="text-neutral-900 no-underline rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="../Premium/Bakes.php">Premium</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header_col col-md-2 col-lg-2">
                    <div class="row1">
                        <div class="col1">
                            <a href="../Menu/SpecialOffer.php">
                            	<img class="image" src="../Images/Special Offer.png">
                            </a>
                        </div>
                        <div class="col2">
                            <a class="text" href="../Menu/SpecialOffer.php">
                                <p class="text-center">Offers</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header_col col-md-2 col-lg-2">
                    <div class="row1">
                        <div class="col1">
                            <a href="../Menu/Contact.php">
                            	<img class="image" src="../Images/Contact.png">
                            </a>
                        </div>
                        <div class="col2">
                            <a class="text" href="../Menu/Contact.php">
                                <p class="text-center">Contact</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header_col col-md-2 col-lg-2">
                    <div class="row1">
                        <div class="col1">
                            <a href="../Menu/About Us.php">
                            	<img class="image" src="../Images/About Us.png" />
                            </a>
                        </div>
                        <div class="col2">
                            <a class="text" href="../Menu/About Us.php">
                                <p class="text-center">About Us</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header_col col-md-2 col-lg-2">
                    <div class="row">
                        <div class="dropdown inline-block relative">
                        	<a href=""><img class="image" src="../Images/User.png" /></a>
                            <a class="text" href="">
                                <p class="text-center">
	                                <?php
										if($User == '')                                	
                              				echo 'My Account';	
	           							else
	           								echo "$User" ;
	                                ?>                               	
                                </p>
                            </a>
                            <ul class="dropdown-menu text-gray-700">
                            	<li><a class="text-neutral-900 no-underline rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="../Account/User.php">
                            		<?php
		                            	if($User == '')
				                            echo "Login";
										else
											echo "Logout";								
                                		?>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header>
        <div class="containerfluid header_last ms-5 mt-1">
            <div class="row h-28">
                <div class="col col-md-4">
                    <input class="h-7 search_input" type="search" name="Search" placeholder="Search....">
                    <button class="search">Search</button>
                </div>
                <div class="col col-md-4"></div>
                <div class="col col-md-2 d-flex image ">
                    <div class="row1 d-flex cart">
                    	<div class="col1 cart_image">
                            <a href="../Menu/My Cart.php"><i class="fa-solid fa-basket-shopping fa-xl fa-flip" style="color: var(--search_text);"></i></a>
                    	</div>
                    	<div class="col2">
                            <a class="text_image" href="../Menu/My Cart.php">
                                <p>&nbsp; My Cart</p>
                            </a>
                    	</div>
                	</div>
            	</div>
        	</div>
        </div>
    </header>
    <img class="logo" src="../Images/Logo.jpg">
</body>
</html>