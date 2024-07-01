<html>
<head>
    <title>Contact</title>
    <?php include("External Link.php"); ?>
    <link href="../Stylesheet/Contact.css" rel="stylesheet"/>
</head>
<body class="bg_color_contact">
    <?php include("Header.php"); ?>
    <div class="container-fluid contact">
        <div class="wrapper centered">
            <article class="letter">
	            <form action="Inquiry.php" method="post" autocomplete="off">
	                <div class="side">
	                    <h1 class="h1">Contact us</h1>
	                    <p class="contact_p">
	                        <textarea class="textarea" placeholder="Your Message" name="Msg"></textarea>
	                    </p>
	                </div>
	                <div class="side">
	                    <p class="contact_p">
	                        <input class="inp" type="text" placeholder="Your Name" name="Name">
	                    </p>
	                    <p class="contact_p">
	                        <input class="inp" type="email" placeholder="Your Email" name="Email">
	                    </p>
	                    <p class="contact_p">
	                        <input class="inp" type="tel" placeholder="Your Phone Number" name="Phone_No">
	                    </p>
	                    <p class="contact_p">
	                        <button type="submit" class="butn" id="sendLetter" name="send">Send</button>
	                    </p>                 
	                </div>
	            </form>
            </article>
            <div class="envelope front"></div>
            <div class="envelope back"></div>
        </div>
        <p class="result-message centered">Thank you for your message!!</p>
        
    </div>
</body>
<script>
    function addClass() {
        document.body.classList.add('sent');
    }
    sendLetter.addEventListener('click', addClass);
</script>
<?php include("Footer.php"); ?>
</html>