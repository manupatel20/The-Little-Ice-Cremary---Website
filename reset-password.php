<?php
	session_start();
	if(isset($_GET['email'])){
		$_SESSION['email']=$_GET['email'];
	}
	else{
			if($_POST['Password']!=$_POST['Confirm_Password']){
				echo "Pasword and confirm password are not same";
			}
			else{
				require_once "config.php";
				$Password = $_POST['Password'];
				$email =  $_SESSION['email'];
				$query = "UPDATE `icecream users` SET password='$Password' WHERE email = '$email'";
				$result = mysqli_query($link,$query);
				echo "<!DOCTYPE html>
                <html>
                <head>
                <style>
                h1{
                    background-color: rgba(255, 255, 255, 0.637);
                    font-size:25px;
                    width:55%;
					color:black;
					font-weight:700;
					height:38px;
					padding-top:6px;
					padding-left:5px;
					text-align:left;
				}
                </style>
                </head>
                <body>
                <h1>Password Has Been Updated, Please Try To Log In.</h1>
                </body>
                </html>";
				// echo "<h2 style=`font-size:30px;`>Password has been changed!</h2>";
			}
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>

<style type="text/css">
body{
    /* background-color:rgb(34, 32, 155); */
	background-image:url("images/reset-password-img.jpeg");
    background-size:cover;
}
h2{
    font-size:45px;
    color:black;
	font-weight:900;
	font-family: Georgia, 'Times New Roman', Times, serif;
}
.input{
 border:1px solid black;
 color:black;
 border-radius:5px ;
 height:30px;
 width:300px;
 }
.submit{
    height:40px;
    width:80px;
    font-size:20px;
    padding:5px;
    border-radius:2px;
}
.submit:hover
{
    background-color:black;
    color:white;
    cursor:pointer;
}
.submit-1 a:link{
    height:40px;
    width:160px;
    font-size:25px;
    padding:5px;
    border-radius:2px;
    color:black;
	text-decoration:none;
	font-weight:700;
}
.submit-1:hover a:hover
{
    background-color:black;
    color:white;
    cursor:pointer;
	font-weight:500;
	border-radius:2px black;
}

</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<div>
	<center><h2 class="h2">Reset &nbspyour &nbspPassword</h2>
	<input class="input" type="text" name="Password" placeholder="New Password"><br><br>
	<input class="input" type="text" name="Confirm_Password" placeholder="Confirm New Password"><br><br><br/>
	<input class="submit" type="submit" name="submit">
	</center><br/><br/>
    <center><button class="submit-1"><a href="index.php">Go To Login</a></button></center>
	</div>
	</form>
</body>
</html>