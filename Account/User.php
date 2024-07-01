<?php
	ob_start();
    session_start();
        	 	    	
    $link = mysqli_connect("localhost","root","","bakery_shop");
    if(mysqli_connect_errno())
    {
    	echo "Failed to connect to MySQL : ".mysqli_connect_error();
    	exit(); 	
    }	
				
	$check_data = "select Login_Status from login";
	$result = mysqli_query($link,$check_data);	 
	if(mysqli_num_rows($result) > 0)
	{				
		while($row = mysqli_fetch_array($result))
		{
			if($row['Login_Status'] == 1)
			{
				$login_status = "update login set Login_Status = 0 ";			
		   		mysqli_query($link,$login_status);
		   		$_SESSION['User']='';
		   		echo "<script> alert('Logged out Successfully')</script>"; 
		   		echo "<script> window.open('../Menu/Home.php','self')</script>";
			}	
   			else
   			{
				echo "<script> window.open('../Account/Login_Form.php','self')</script>";
	 		} 				
		}
	}
	else
	{
		echo "<script> window.open('../Account/Login_Form.php','self')</script>";
	}  		
    mysqli_close($link);
?>
