
<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
	<link rel="stylesheet" type="text/css" href="my_info.css">
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

<center><h1>Account Details</h1></center>

<div class="info">

	<table  align="center" height="300px" width="70%" class="table">
		<?php 

		require_once "config.php";

		
		$email= $_COOKIE['login'];
		

		 $sql = "Select * from `icecream users` where email='$email'";
         $result = mysqli_query($link , $sql);

        
         $row = mysqli_fetch_assoc($result);
         $user_name = $row['name'];
         $contactnumber = $row['contactnumber'];

         
		echo"
			     <tr>
			     	 <td >NAME : </td>
				     <td><b>$user_name</b></td>
				 </tr>

				 <tr>
				 	<td >EMAIL : </td>
				 	<td><b>$email</b></td>
				 </tr>

				 <tr>
				 	<td >CONTACT NO. : </td>
				 	<td><b>$contactnumber</b></td>
				 </tr>

				";?>

				





			</table>
		</div>


</div>
</body>
</html>