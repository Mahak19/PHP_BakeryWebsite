<?php	
	$Msg = $_POST['Msg'];
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Phone_No = $_POST['Phone_No'];
	
	$link = mysqli_connect("localhost","root","","bakery_shop");	
    if(mysqli_connect_errno())
    {
    	echo "Failed to connect to MySQL : ".mysqli_connect_error();
    	exit(); 	
    }	
    else
    {
	    if(isset($_POST['send']))
	    {
	    	if($Msg=="" or $Name=="" or $Phone_No =="" or $Email=="")
	   		{
	   			echo "<script> alert('Please fill all details')</script>";
	   			echo "<script> window.open('Contact.php','self')</script>";
	   		}
	   		else
	   		{
	   			$query = "insert into contact_us(Name,Email,Phone_No,Comment) values('".$Name."','".$Email."','.$Phone_No.','".$Msg."')";
	   			mysqli_query($link,$query);
	   			echo "<script> alert('Thank you for message.')</script>";
	   			echo "<script> window.open('Contact.php','self')</script>";
	   		}	
	    }
	}   
    mysqli_close($link);	
?>