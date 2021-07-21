<?php
session_start();
if(!(isset($_COOKIE['login'])))
{
  echo "<!DOCTYPE html>
  <html>
  <head>
  <style>
  *{
    background-color: linen;
  }
  h2 {
      padding-left:40px;
      background-color: linen;
          font-size:35px;
      width:25%;}
      .btn{
        margin-top: 5px;
        margin-left: 50px;
        border-radius: 5px;
        font-size: 20px;
        padding: 8px;
        background-color: black;
        color: rgb(227, 227, 235);
        font-weight: 400;
    }
    .btn:hover{
        padding: 7px;
        font-weight: bold;
        
    }
  </style>
  </head>
  <body>
  <h2>Please Login First</h2>
  <div><a href='register.php'><button class='btn'>LOGIN</button></a> </div>
  </body>
  </html>";
  return;
}
?>

<?php
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

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="payment.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="background">

<div class="row">

<div class="col-25">

    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $count; ?></b></span></h4>
      <?php

      $total=0;

        if(isset($_SESSION[$_COOKIE['login']."_cart"]))
        {
         
            foreach($_SESSION[$_COOKIE['login']."_cart"] as $key=>$value)
            {
              $total+= $value['quantity']*$value['price'];
              echo"       
                  <p>$value[item_name] &nbsp &nbsp  ($value[quantity]) <span class='itotal price'><b>₹".($value['quantity']*$value['price'])."</b></span></p> 
              ";
              
            }
        }
     ?>
      
      <hr>
      <p>Total <span class="price"><b>₹<?php echo $total; ?></b></span></p>
      <p>Tax <span class="price"><b>+18% GST</b></span></p>
      <p >Grand Total <span class="price"><b>₹<?php echo $total *1.18; ?></b></span></p>
<br><br>
      <center><button class="button"><a href="cart.php">Go Back</a></button></center>

    </div>
  </div>
  <div class="col-75">
    <div class="container">
      <form action="paynow.php" method="POST">
      
        <div class="row">
          <div class="col-50">
          <h3>User Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Surname-Firstname-Middlename">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="abc123@.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" >
            <label for="state"><i class="fa fa-institution"></i> State</label>
            <input type="text" id="state" name="state" >
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:rgb(16, 16, 83);"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-credit-card" style="color:navy;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" autocomplete="off" required >
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" autocomplete="off" autocomplete="off" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" autocomplete="off"  required >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="000" autocomplete="off"  required>
              </div>
            </div>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" autocomplete="off" required >
            
          </div>
          
        </div>
        <input type="submit" value="PAY NOW" class="btn">
      </form>
    </div>
  </div>
  
</div>
</div>

</body>
</html>






  