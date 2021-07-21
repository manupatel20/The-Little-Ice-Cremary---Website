

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO OUR SHOP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
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


<div class="background">

<?php
if(isset($_COOKIE['not_logged_in']))
{
	echo "<script>
	         alert('You are not logged in');
	         window.location.href='../register.php';
		  </script>";

	// echo "you are not logged in";
	 setcookie("not_logged_in", 0, time()-3600);
}
?>




<?php
if(!(isset($_COOKIE['login'])))
{
?>
<button class="signin_button" name="signin"><a href="index.php">SIGN IN </a></button>
<?php
}
else{
?>
<button class="signin_button"><a href="my_info.php">
	<?php
	echo $_COOKIE['login'];
	?>
</a></button>
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



<h1 class="font">The Little Ice-Creamary</h1>
<div class="img">
<div class="img1">

	<a href="scoop.php">
	<img src="images/almond-fudge.png" width="170px" height="170px">
	<div class="overlay">
    <div class="text">Scoops</div>
	</a>
  </div>
  </div>

<div class="img2">
	<a href="tub.php">
	<img src="images/rajbhog-cup.png" width="170px" height="170px">
	<div class="overlay">
    <div class="text">Tubs</div>
	</a>
  </div>
</div>

<div class="img3">
	<a href="pack.php">
	<img src="images/butter-scotch-pack.png" width="170px" height="170px">
	<div class="overlay">
    <div class="text">Family<br/>Packs</div>
</a>
  </div>
</div>

<div class="img4">
	<a href="cone.php">
	<img src="images/Topo-Cones-Havmor.png" width="170px" height="170px">
	<div class="overlay">
    <div class="text">Cones</div>
	</a>
  </div>
</div>

<div class="img5">
	<a href="candy.php">
	<img src="images/Triple-Chocolate.png" width="170px" height="170px">
	<div class="overlay">
    <div class="text">Candy</div>
	</a>
  </div>
</div>

<div class="img6">
	<a href="novelties.php">
	<img src="images/Slice-Cassata.png" width="170px" height="170px">
	<div class="overlay">
    <div class="text">Novelties</div>
	</a>
  </div>
</div>

</div>

</div>
</body>
</html>


