<?php
session_start();
include_once 'config.php';
$email1=0;
$email2=0;
if(isset($_POST['submit']))
{
    $email1 = $_POST['email'];
    
    
    $result = mysqli_query($link,"SELECT * FROM `icecream users` where email='" . $_POST['email'] . "'");
    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_assoc($result); 
        $email2=$row['email'];
        $user_name=$row['name'];
    

        if($email1==$email2) {
            $to = $email1;
            $txt = "Hi, $user_name. Click http://localhost:2024/icecream%20parlour/reset-password.php?email=$email1 to reset the password";
            $headers = "From: icecream.cremary@gmail.com\r\n";
            $subject = "Reset Password";
            $msg=mail($to,$subject,$txt,$headers);
            if($msg){
                $_SESSION['msg'] = 'password link sent';
                echo "<!DOCTYPE html>
                <html>
                <head>
                <style>
                h2 {
                    padding-left:40px;
                    background-color: white;
                        font-size:35px;
                    width:45%;}
                </style>
                </head>
                <body>
                <h2>RESET PASSWORD LINK SENT!</h2>
                </body>
                </html>";
                // echo "<h2 style=`font-size:30px; background-color:#fff;`>RESET PASSWORD LINK SENT!</h2>";
            }
            else{
                echo "mail was not sent!!";			
            }
        } 
    }
    
  else{
    echo "<!DOCTYPE html>
    <html>
    <head>
    <style>
    h2 {
        padding-left:35px;
        background-color:rgba(255, 255, 255, 0.637);
        font-size:30px;
        width:25%;
        font-weight:900;}
    </style>
    </head>
    <body>
    <h2>Please Register Yourself</h2>
    </body>
    </html>";
	  }
    
}
//echo phpinfo();
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
body{
    /* background-color:rgb(149, 185, 196); */
    background-image:url("images/reset-password-img.jpeg");
    background-size:cover;
}
 .input{
 border:3px;
 border-radius:5px;
 height:30px;
 width:300px;
 }
 h1{
  color:black;
  font-size:50px;
  text-align:center;
  font-weight:800;
 }
.email{
  color:black;
  font-size:40px;
  text-align:center;
  font-weight:700;
}
.submit{
    height:50px;
    width:120px;
    font-size:20px;
    padding:7px;
    border-radius:5px;
}
.submit:hover
{
    background-color:black;
    color:white;
    cursor:pointer;
}
</style>
</head>
<body>
<h1>Enter your Email</h1>
<form action='' method='post'>
<table cellspacing='10' align='center'>
<tr><td class="email">Email&nbsp</td><td><input class="input"type='email' name='email'/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td><input class="submit" type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>