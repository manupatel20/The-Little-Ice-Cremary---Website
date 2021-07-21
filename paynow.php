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
<?php
}
?>

<?php

require_once "config.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

	 $first_name = $_POST['firstname'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $cardname = $_POST['cardname'];
     $cardnumber = $_POST['cardnumber'];
     $expyear = $_POST['expyear'];
     $cvv = $_POST['cvv'];
     $expmonth = $_POST['expmonth'];

     $sql = "Select * from `icecream users` where email='$email'";
         $result = mysqli_query($link , $sql);

        
         $row = mysqli_fetch_assoc($result);
       
         $contactnumber = $row['contactnumber'];

    

     ?>

	<!DOCTYPE html>
	<html>

	<head>
	<style>
	table {
	  border-collapse: collapse;
	  width: 100%;
	  
	}

	th, td {
	  padding: 8px;
	  text-align: left;
	  border-bottom: 1px solid #ddd;
	  font-weight: 800;
	  font-family: 'Times New Roman', Times, serif;
	  font-size: 25px;
	  border:5px solid black;
	  border-radius: 1000px;
	  border-collapse: collapse;
	}
	h1{
		font-family: serif;
		color: white;
		
		 
	}
	.table .abc{
        background-color: grey;
        color: black;


	}
	.table{
		/*display: flex;*/
	    margin-left: auto;
	    margin-right: auto;
	    text-align: left;
	    width: 70%;
	    background-color: lightblue;
	    padding: 8px;
	   

	}

	 tr:hover{
	background-color: white;
	color: black;
	padding: 0;
	font-weight: bold;
}
	</style>
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

		<center><h1 style="font-family: 'Times New Roman', Times, serif; font-size: 55px;"><b>Customer Summary</b></h1></center>

	<table class="table" >
		<div class="abc" >
	  
	  <tr>
	    <td>Full Name</td>
	    <td><?php echo $first_name ?></td>
	    
	  </tr>
	  <tr>
	    <td>Email</td>
	    <td><?php echo $email ?></td>
	   
	  </tr>
	   <tr>
	    <td>Mobile No.</td>
	    <td><?php echo $contactnumber ?></td>
	   
	  </tr>
	 
	  <tr>
	    <td>Address</td>
	    <td><?php echo $address ?></td>
	    
	  </tr>
	   <tr>
	    <td>City</td>
	    <td><?php echo $city ?></td>
	    
	  </tr>
	   <tr>
	    <td>State</td>
	    <td><?php echo $state ?></td>
	    
	  </tr>
	   <tr>
	    <td>Card Name</td>
	    <td><?php echo $cardname ?></td>
	    
	  </tr>
	   <tr>
	    <td>Card Number</td>
	    <td><?php echo $cardnumber ?></td>
	    
	  </tr>
	   <tr>
	    <td>Exp Year</td>
	    <td><?php echo $expyear ?></td>
	    
	  </tr>
	  <tr>
	    <td>Exp Month</td>
	    <td><?php echo $expmonth ?></td>
	    
	  </tr>
	  <tr>
	    <td>CVV</td>
	    <td><?php echo $cvv ?></td>
	    
	  </tr>
	</div>
	 
	</table>
</br></br></br></br>

	</body>
	</html>

    
    

     
     
     
     <!DOCTYPE html>
	<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="paymento.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>

     <div class="container">
     	<center><h1 style="font-family: 'Times New Roman', Times, serif; color:black;"><b>Cart Summary</b><span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $count; ?></b></span></h1></center>
     
      <?php

      $total=0;

        if(isset($_SESSION[$_COOKIE['login']."_cart"]))
        {
         
            foreach($_SESSION[$_COOKIE['login']."_cart"] as $key=>$value)
            {
              $total+= $value['quantity']*$value['price']*1.18;
              echo"       
                  <p>$value[item_name] &nbsp &nbsp  ($value[quantity]) <span class='itotal price'><b>₹".($value['quantity']*$value['price']*1.18)."</b></span></p> 
              ";
              
            }
        }
     ?>
      
      <hr>
      
      <p >Grand Total <span class="price"><b>₹<?php echo $total; ?></b></span></p>
<br><br>
    </div>
	<h1 style="color: rgb(0, 0, 0); text-align: center; font-size: 35px; font-weight: bold;">Once the Order is placed you wont be able to cancel it.
	</h1>
	<div><a href="order-now.php"><button class="btn" name="purchase">Order Now</button></a> </div>

</body>
</html>
 
 <?php   

}
?>

