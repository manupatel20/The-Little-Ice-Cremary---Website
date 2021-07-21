<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO OUR SHOP</title>
	<link rel="stylesheet" type="text/css" href="scoop.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

  <body class="background_image">

	<div class="background">
 

<nav class="w3-sidebar w3-black w3-animate-top w3-xlarge" style="display:none;padding-top:50px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xlarge w3-padding w3-display-topleft" style="padding:6px 24px">
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

<?php
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





<h1 class="font"><center>The Little Ice-Creamary</center></h1>

<div class="main-content-1">
  <a href="candy/triple-chocolate.php">
    <img src="images/Triple-Chocolate.png" width="280px" height="280px">
    <h3><center>TRIPLE CHOCOLATE</center></h3></a>
</div>


<div class="main-content-2">
<a href="candy/raspberry.php">
    <img src="images/rasberry.png" width="280px" height="280px">
    <h3><center>RASPBERRY</center></h3></a>
</div>

<div class="main-content-3">
<a href="candy/shahi-kulfi.php">
    <img src="images/shahi-kulfi.png" width="280px" height="280px">
    <h3><center>SHAHI KULFI</center></h3></a>
</div>

<div class="main-content-4">
<a href="candy/rajbhog-kesar.php">
    <img src="images/Rajbhog-kesar.png" width="280px" height="280px">
    <h3><center>RAJBHOG KESAR</center></h3></a>
</div>

<div class="main-content-5">
<a href="candy/almond-splash.php">
    <img src="images/almond-splash.png" width="280px" height="280px">
    <h3><center>ALMOND SPLASH</center></h3></a>
</div>

<div class="main-content-6">
<a href="candy/crunchy-bite.php">
    <img src="images/crunchy-bite.png" width="280px" height="280px">
    <h3><center>CRUNCHY BITE</center></h3></a>
</div> 
</div>
</div>
</body>
</html>