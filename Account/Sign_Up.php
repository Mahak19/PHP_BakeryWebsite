 <?php
    $Name = $_POST['Name'];
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    	  	    
    $link = mysqli_connect("localhost","root","","bakery_shop");	
    if(mysqli_connect_errno())
    {
    	echo "Failed to connect to MySQL : ".mysqli_connect_error();
    	exit(); 	
    }		
   	if($Name=="" or $UserName=="" or $Password=="" or $Email=="")
   	{
   		echo "<script> alert('Please insert data in all fields')</script>";
   		echo "<script> window.open('./Login/Login_Form.php','self')</script>";
   	}
   	elseif(strlen($Password)<6)
   	{
   		echo "Password should be at least 6 characters long."; 
   		echo "<script> window.open('./Login/Login_Form.php','self')</script>";
   	}
   	else
   	{			
   		$check_data = "select User_Name from register where User_Name = '".$UserName."'";
   		$result = mysqli_query($link,$check_data);		
   		if(mysqli_num_rows($result) > 0)
   		{				
   			echo "<script> alert('This username is already taken')</script>"; 
   			echo "<script> window.open('Login_Form.php','self')</script>";
		}
   		else
		{
			$signup_query = "insert into register(Name,User_Name,Password,Email) values(?,?,?,?)";
			$login_query = "insert into login(User_Name,Password) values(?,?)";	    	
			$signup_stmt = mysqli_prepare($link,$signup_query);
			$login_stmt = mysqli_prepare($link,$login_query);	    	
			
			mysqli_stmt_bind_param($signup_stmt,"ssss",$Name,$UserName,$Password,$Email);
			mysqli_stmt_execute($signup_stmt);
				    	
		  	mysqli_stmt_bind_param($login_stmt,"ss",$UserName,$Password);
			mysqli_stmt_execute($login_stmt);
				    	
			if(mysqli_stmt_affected_rows($signup_stmt) > 0)
			{
			   	echo "<script> alert('Your registration is successfully done')</script>"; 
			   	echo "<script> window.open('Login_Form.php','self')</script>";
			}
			else
			{
			 	echo "<script> alert('Error in registration . Please try again.')</script>"; 
			 	echo "<script> window.open('Login_Form.php','self')</script>";
			}			   	
		 	mysqli_stmt_close($signup_stmt);
    		}		
    	}		
    	mysqli_close($link);
?>