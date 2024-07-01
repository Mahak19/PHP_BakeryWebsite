<?php
	ob_start();
	if(!isset($_SESSION))
    {
    	session_start();		
    }
?>
<html>
<head>
    <title>My Cart</title>
    <?php include("External Link.php") ?>
    <style>
        .font_family {
            font-family: "Playfair Display";
        }
        .card {
            margin-bottom: 20px;
        }
        .cart_body {
            background-image: url("../Images/Product_BG.jpg");
            background-size: cover;
        }
        .cart_img {
            height: 110px;
            width: 190px;
            border-radius: 10px;
        }
        .quantity {
            display: flex;
            border: 1px solid gray;
            width: 140px;
            height: 40px;
            border-radius: 10px;
            justify-content: center;
            align-items: center;
            text-align: center;
            float: inline-end;
        }
        .remove_btn, .wishlist_btn {
            border-radius: 20px;
            background-color: rgb(224, 146, 247);
            border: 1px solid gray;
            height: 35px;
            width: 165px;
        }
        .minus_btn, .add_btn, .num {
            border: none;
            background-color: white;
        }
        .total_amt {
            margin-top: 45px;
            margin-left: 250px;
        }
        .form-control {
            background: white;
            text-align: center;
        }
        
        .button{
        	display: flex;
        	flex-direction: row;
        }
    </style>
</head>
<body class="cart_body">
    <?php 
       	include('header.php'); 
   	    $link = mysqli_connect("localhost", "root", "", "bakery_shop");
	    if (mysqli_connect_errno()) 
	    {
	        echo "Failed to connect to MySQL : " . mysqli_connect_error();
	        exit();
    	}
    	else 
    	{    		
    		$User = $_SESSION['User'];
	        $cart = "select * from cart, menu where cart.User_Name = '".$User."' AND cart.ItemId= menu.ItemID ";
	        $result = mysqli_query($link, $cart);
	        if (mysqli_num_rows($result) > 0) 
	        {
	            while ($row = mysqli_fetch_array($result)) 
	            {
	                $photo = mysqli_real_escape_string($link, $row['Photo']);
	                $ItemName = $row['Item_Name'];
	                $Price = $row['Price'];
				}
	            $qty = 1;
    			$amount = $Price;	
    			if(isset($_POST['inc_btn']))
    			{
    				$qty++;
    				$amount *= $qty;
    				$cart_update = "update cart set Quantity = '.$qty.',Amount = '.$amount.' where User_Name = '".$User."'";
    				mysqli_query($link,$cart_update);	
    			}
    			if(isset($_POST['dec_btn']))
    			{
    				if($qty>1)
    					$qty--;
    					$amount *= $qty;
    					$cart_update = "update cart set Quantity = '.$qty.',Amount = '.$amount.' where User_Name = '".$User."'";
    					mysqli_query($link,$cart_update);	
    			}
    			if(isset($_POST['remove_btn']))
    			{
    				$cart_update = "delete from cart where User_Name = '".$User."'";
    				mysqli_query($link,$cart_update);	
    				//echo "No Items In Cart";
    			}
    			if(isset($_POST['order_btn']))
    			{
    				echo " <script> window.open('../Account/Order.php') </script> ";
    			}  		
	            echo "
	    			<div class=container font_family product_data>
	        			<div class=row>
	            			<div class=card>
	               				<div class=card-body>
	                   				<div class=row>
	                       				<div class=col-4>
	                           				<img src=$photo class=cart_img>
	                       				</div>
	                       				<div class=col-4>
	                           				<h3>$ItemName</h3>
	                           				<p>&#x20B9; $Price</p>
	                           				<form method=post>
	                            				
					                            <button class=remove_btn name=order_btn><i class=fa-solid fa-trash style=color: rgb(147, 0, 192);></i> Place Order</button>
					                        </form>
					                    </div>
	            			            <div class=col-2 button>
	                        	        	<div class=input-group mb-3 style=width:110px;>
	                        	        		<form method=post>
	                            	        		<button class=input-group-text increment_btn name = inc_btn>+</button>
	                                	    		<input type=text class=form-control input-qty bg-white value=$qty disabled>
	                                    			<button class=input-group-text decrement_btn name = dec_btn>-</button>
	                                    		</form>
	                                		</div>
	    		                       		<h4 class=total_amt style=width:150px;>&#x20B9; $amount</h4>	
	            	            		</div>
	                	    		</div>
	                			</div>
	            			</div>
	        			</div>
	    			</div>";
	        	}
	    	}
	mysqli_close($link);
?>
</body>
<?php include('Footer.php') ?>
<script src="cart.js"></script>
</html>