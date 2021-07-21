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
        cursor:pointer;
        
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
// session_destroy();
// print_r($_SESSION[$_COOKIE['login']."_cart"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./cart.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">

    <title>cart</title>
</head>

<body>
    
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
            <div class="heading">
                <h1 style=" font-size:70px; font-family: 'Zilla Slab', serif;">MY  CART</h1>
            </div>
            <br/>
            <div>

                <table class="table">
                    
                      <tr class="column">
                        <th>Serial No.</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                      </tr>
                      
                    

                    
                        <?php
                        // $total=0;
                        // $quantity=0;
                      
                        $x=0;
                            if(isset($_SESSION[$_COOKIE['login']."_cart"]))
                            {
                                foreach($_SESSION[$_COOKIE['login']."_cart"] as $key=>$value)
                                {
                                    
                                    // $quantity=$quantity+$value['quantity'];
                                    // $total=$total+$value['price'];
                                    $x++;
                                // print_r($value);    
                                echo"
                                        <tr>
                                            <td>$x</td>
                                            <td>$value[item_name]</td>
                                            <td>₹ $value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                                            
                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                <input type='number' class='iquantity' name='change_quantity' onchange='this.form.submit();' value='$value[quantity]' min='1' max='10'>
                                                <input type='hidden' name='item_name' value='$value[item_name]'>
                                                </form>
                                            </td>

                                           <td class='itotal'></td>
                                            <td>
                                               <form action='manage_cart.php' method='POST'>
                                                  <button class='remove' name='remove_item'>REMOVE</button>
                                                  <input type='hidden' name='item_name' value='$value[item_name]'>
                                               </form>
                                            </td>
                                        </tr>
                                    
                                    ";
   
                                }

                                
                            }
                        ?>
                    
                <tr class="column">
                <th colspan="4">GRAND TOTAL</th>
                <th id="gtotal"></th>
                <th id="quantity"></th>
                <th></th>
                </tr>    
              

                <?php
                    $count=0;
                    if(isset($_SESSION[$_COOKIE['login']."_cart"]))
                    {
                    $count=count($_SESSION[$_COOKIE['login']."_cart"]);
                    }
                ?>
                 
                 </table>

            </div>


            <div><a href="payment.php"><button class="btn" name="purchase">Make Purchase</button></a> </div>



  <script>
    var gt=0;
    var qt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    var quantity=document.getElementById('quantity');
    function subtotal()
    {
      gt=0;
      // qt=0;
      for(i=0;i<iprice.length;i++)
      {
        itotal[i].innerText="₹"+(iprice[i].value)*(iquantity[i].value);

        gt= gt+(iprice[i].value)*(iquantity[i].value) ;

        // price 650 quantity 1    gt= 0 + (650*1)
        // price 750 quantity 2    gt= 650 +(750*2) === gt=2150

        // qt=qt+ (iquantity[i].value);

      }

      gtotal.innerText="₹"+gt;
      // quantity.innerText=qt;
     
    }

    subtotal();

  </script>
  
</body>
</html>