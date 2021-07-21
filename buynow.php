
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
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
      <?php

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(isset($_POST['buy_now']))
            {

              ?>
               
              <tr >
                  <td><?php echo $_POST['item_name']; ?></td> 
                  <input type="number" id="quantity" onchange="change();">
                  <p id="price"></p>
                  <p id="gt"></p>
                  
                
                    
                  <br>
              </tr>
            <?php
            }
            
        
        }
     ?>
      
      <hr>
<br><br>
      <center><button class="button"><a href="cart.php">Go Back</a></button></center>

    </div>
  </div>
  <div class="col-75">
    <div class="container">
      <form action="paynow-buynow.php" method="POST" >
      
        <div class="row">
          <div class="col-50">
          <h3>User Details</h3>
            <input type="hidden" name="item_name" value="<?php echo $_POST['item_name']; ?>">
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
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" autocomplete="off" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" autocomplete="off" required >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="000" autocomplete="off" required>
              </div>
            </div>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" autocomplete="off" required >
            
          </div>
          
        </div>
        <input type="submit" value="PAY NOW" class="btn" name="paynow">
      </form>
    </div>
  </div>
  
</div>
</div>

<script>
    function change() {
        var x = document.getElementById("quantity");
        var y = document.getElementById("price");
        var z = document.getElementById("gt");
        y.innerHTML = "Total Cost: ₹"+ (x.value * <?php echo $_POST['price']; ?>) + "<br><br>" + "+18% GST";
        z.innerHTML = "Grand Total: ₹"+ (x.value * <?php echo $_POST['price']*1.18; ?>) ;
        localStorage.setItem("buynow_total", x.value * <?php echo $_POST['price']; ?>);
        localStorage.setItem("buynow_quantity", x.value);
    }
</script>

</body>
</html>






  