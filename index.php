<?php

require_once "config.php";

//Initialize variables
$email = $password ="";
$empty_mail = $empty_password = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST['email']) && !empty($_POST['email']))
    {
        // $email=mysqli_real_escape_string($link,trim($_POST['email']));
        $email=trim($_POST['email']);
    }
    else
    {
        $empty_mail="Email cannot be empty.";
        
    }
    if (isset($_POST['password']) && !empty($_POST['password']))
    {
        $password=mysqli_real_escape_string($link,trim($_POST['password']));
    }
    else
    {
        $empty_password="Password cannot be empty.";
    }
    

    //Querying DB if all values are set and no error messages.
    if(empty($empty_mail) && empty( $empty_password) )
    {
        $sql = "SELECT * from `icecream users` WHERE password='$password'";
        $result=mysqli_query($link,$sql);
        if (mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            if ($email==$row['email'])
            {
                if($password==$row['password'])
                {
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['password'] = $password;
                    setcookie("login",$email);
                    header("location: main.php");
                }
                else
                {
                    $empty_password= "Invalid Password.";//error when user enters wrong password .
                }
            }
            else
            {
                $empty_mail= "Invalid Email ID";//error when user enters wrong credentials 
            }
        }
        else
        {
            $empty_mail= "User does not exists.";//error when user enters non-existing  in DB.
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registerstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
     <h1 class="font">The Little Ice-Creamary</h1>
<div class="signup" style="height:450px; margin-top: 70px;">
<h1 style="text-align:center; font-size: xx-large; font-weight: 800;">LOGIN</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"  >
    
    <div class="h1"value="<?php echo (!empty($empty_mail)); ?>">
        
        <input  class="k" type="text" name="email" placeholder="User Email ID" value="<?php echo $email; ?>">
        <span><?php echo $empty_mail;?></span>
    </div>
    <br></br>
    <div class="h1" value="<?php echo (!empty($empty_password)); ?>">
        
        <input class="k" type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
        <span><?php echo $empty_password;?></span>
    </div>
    <br></br>

       <div class="btn1">
        <input class="btn"type="submit" name="submit" value="Submit">
       </div>
       <br>
       <br>
       
       <div class="btn1">
                 <div>
                   <span style="font-weight: bold;" ><a href="forgot-password.php">Forgot password ?</a></span>
                  </div>
                  <br>
                  

       <div class="btn1">
                 <div>
                   <span style="font-weight: bold;" ><a href="register.php">Register here</a></span>
                  </div>
        </div>
       <br>
    </div>
</body>
</html>