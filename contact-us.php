<?php include 'send-mail.php'; ?>



<!DOCTYPE html>
<html land="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    
    <title>WELCOME TO OUR SHOP</title>
	<link rel="stylesheet" type="text/css" href="css/ice.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="style-contact-us.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

	<div class="background">
		
    <?php
session_start();
if(isset($_COOKIE['login']))
{
  $count=0;
if(isset($_SESSION[$_COOKIE['login']."_cart"]))
{
  $count=count($_SESSION[$_COOKIE['login']."_cart"]);
}

?>
<a href="cart.php" class="cart">My Cart&nbsp(<?php echo $count; ?>)</a>
<?php
}
?>

    <nav class="w3-sidebar w3-black w3-animate-top w3-xlarge" style="display:none;padding-top:50px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
  <a href="main.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">HOME</a>
    <a href="scoop.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">SCOOPS</a>
    <a href="tub.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">TUBS</a>
    <a href="pack.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">FAMILY-PACK</a>
    <a href="cone.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">CONES</a>
    <a href="candy.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">CANDIES</a>
    <a href="novelties.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">NOVELTIES</a>
    <a href="contact-us.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">CONTACT US</a>
	<a href="index.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">SIGN IN</a>
	<a href="logout.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">LOG OUT</a>
  </div>
</nav>


<span class="w3-button w3-xlarge w3-white w3-left" onclick="w3_open()"><i class="fa fa-bars"></i></span> 
<div class="w3-clear"></div>



 
<script>

function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

<h1 class="font">The Little Ice-Creamary</h1>

<!--<div class="img1">
	<a href="desserts.php">
	<img src="D:\php project\images/rajbhog-cup.png" width="100px" height="100px">VIEW ALL</a></div>
</div>-->

    <?php echo $alert;?>
    
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
        </div>
        <div class ="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg></div>
                    <div class="text">
                        <h3><b>Address</b></h3>
                        <p><b>15,Galaxy building,<br/>Alkapuri,Vadodara<br/>390025</b></p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg></div>
                    <div class="text">
                        <h3><b>Phone</b></h3>
                        <p><b>+91 9227590139</b><br/><b>+91 9328024622</b><br/><b>+91 7229000333</b></p>
                    </div>
                </div>
                
                <div class="box">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                      </svg></div>
                    <div class="text">
                        <h3><b>Email</b></h3>
                        <p><b>icecream.cremary@gmail.com</b></p>
                    </div>
                </div>

            </div>
            <div class="contactForm">
                <form action="" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <br/><input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <br/><textarea name="message" required="required"></textarea>
                        <span>Type your message....</span>
                    </div>
                    <div class="inputBox">
                        <br/><input type="submit" name="submit" value="Send">
                    </div>
                </form>
            </div>
        
        </div>
    
    </section>
    <script type="text/javascript">
         if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
         }
    </script>
    </body>
    </html>