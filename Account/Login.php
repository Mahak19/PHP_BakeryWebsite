 <?php
    ob_start();
    session_start();
    $UserName = $_POST['UserName'];
	$Password = $_POST['Password'];	 	    	
	$_SESSION['User'] = $UserName;
    	
    $link = mysqli_connect("localhost","root","","bakery_shop");
   	if(mysqli_connect_errno())
   	{
   		echo "Failed to connect to MySQL : ".mysqli_connect_error();
   		exit(); 	
   	}	
	else
	{
		if(isset($_POST['Login']))
		{
			if($UserName=="" or $Password=="")
   			{
	   			echo "<script> alert('Please insert data in all fields')</script>";
	   			echo "<script> window.open('Login_Form.php','self')</script>";
	   		}	  	 		
	   		else
	   		{			
	   			$check_data = "select * from login where User_Name = '".$UserName."'";
	   			$result = mysqli_query($link,$check_data);		
	   			if(mysqli_num_rows($result) > 0)
	   			{				
	   				while($row = mysqli_fetch_array($result))
	   				{
	   					if ($UserName == $row['User_Name'] and $Password == $row['Password']) 
						{
							if($row['Login_Status'] == 1)
							{
								echo "<script> alert('User is already Logged in')</script>";
								echo "<script> window.open('../Menu/Home.php','self')</script>";
							}
							else
							{
								$login_status = "update login set Login_Status = 1 where User_Name = '$UserName' ";			
		   						mysqli_query($link,$login_status); 
		   						echo "<script> alert('Logged in Successfully')</script>";
								echo "<script> window.open('../Menu/Home.php','self')</script>";
							}
						}
						else
						{
							echo "<script> alert('Password is Incorrect')</script>";
							echo "<script> window.open('Login_Form.php','self')</script>";
						}
					}
				}
	   			else
				{
					echo "<script> alert('Username is either incorrect or not registered')</script>"; 
					echo "<script> window.open('Login_Form.php','self')</script>";
				}	   	
	    	}
		}
	}
	mysqli_close($link);
?>            
