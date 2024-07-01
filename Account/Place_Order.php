<?php
	ob_start();
	session_start();
	$User = $_SESSION['User'];
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Phone_No = $_POST['Phone_No'];
    $D_Date = $_POST['D_Date'];
    $D_Mode = $_POST['D_Mode'];
	$Order_ID = rand(1000,5000);
	
    $link = mysqli_connect("localhost","root","","bakery_shop");	
    if(mysqli_connect_errno())
    {
    	echo "Failed to connect to MySQL : ".mysqli_connect_error();
    	exit(); 	
    }	
	if(isset($_POST['Place_Order']))
	{
		if($Name=="" or $Address=="" or $Phone_No=="" or $D_Date=="")
		{
			echo "<script> alert('Please fill all the details.') </script>";						echo " <script> window.open('../Account/Order.php') </script> ";		
		}
		else
		{
			$query = "select * From cart where User_Name = '$User'";
			$result = mysqli_query($link,$query);
			if (mysqli_num_rows($result) > 0) 
	       	{
	           	while ($row = mysqli_fetch_array($result)) 
	           	{
	           		$ItemID = $row['ItemID'];
	           		$amount = $row['Amount'];
				}
			}								
			$query = "insert into order_detail(Order_ID,Name,Address,Phone_No,Delivery_Date,Delivery_Mode,Item_ID,Total_Amount,User_Name) values('$Order_ID','$Name','$Address','$Phone_No','$D_Date','$D_Mode','$ItemID',$amount,'$User')";
            mysqli_query($link,$query);
			echo "<script> alert('Order Confirmed')</script>";  
			echo " <script> window.open('../Menu/Home.php') </script> ";			
		}
	}				
   	else
   	{
		echo "<script> alert('No User is Logged in.Please Log in first')</script>";  
		echo "<script> window.open('Login_Form.php','self')</script>";
	}
    mysqli_close($link);
?>