<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../Stylesheet/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>

<body class="bg_img">
    <div>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="Sign_Up.php" method="post" autocomplete="off">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="Name" name="Name" />
                    <input type="email" placeholder="Email" name="Email" />
                    <input type="text" placeholder="User Name" name="UserName" />
                    <input type="password" placeholder="Password" name="Password" />
                    <button type="submit" name="Sign_Up">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="Login.php" method="post" autocomplete="off">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="text" placeholder="User Name" name="UserName" />
                    <input type="password" placeholder="Password" name="Password" />
                    <a href="#">Forgot your password?</a>
                    <button type="submit" name="Login">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>       
        </div>
    </div>
    <script>
    	const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
    </script>
</body>
</html>