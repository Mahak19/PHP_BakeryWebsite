<?php
    ob_start();
    session_start();
    	
	$User =$_SESSION['User'];
    $ItemID = $_POST['cart'];
    	
	$link = mysqli_connect("localhost","root","","bakery_shop");
    if(mysqli_connect_errno())
    {
    	echo "Failed to connect to MySQL : ".mysqli_connect_error();
    	exit(); 	
    }	
	else
	{
		$check_data = "select User_Name from login where User_Name='".$User."'";
		$result = mysqli_query($link,$check_data);
		if(mysqli_num_rows($result) > 0)
		{				
			while($row = mysqli_fetch_array($result))
			{
			 	if($row['User_Name'] == $User )
				{
					echo "<script> alert('Item Added To Cart')</script>";
					$menu_query = "select * from menu where ItemID = '$ItemID'";
					$menu_result = mysqli_query($link,$menu_query);
					if(mysqli_num_rows($result) > 0)
	   				{				
	   					while($row = mysqli_fetch_array($menu_result))
	   					{
	   						$Price = $row['Price'];
						}
					}
					$cart = "insert into cart(User_Name,ItemID,Quantity,Amount) values('".$User."','.$ItemID.',1,'.$Price.')";
					mysqli_query($link,$cart);
					echo "<script> window.open('../Menu/My Cart.php','self')</script>";
				} 				   		 				
			}
		}
		else
   		{
   			echo "<script> alert('No user is logged in. Please log in first. ')</script>";
			echo "<script> window.open('../Account/Login_Form.php','self')</script>";
	 	}
	}
    mysqli_close($link);
?>