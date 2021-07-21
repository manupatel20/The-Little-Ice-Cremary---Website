<?php

require_once "config.php";
 
// Define variables and initialize with empty values
$name = $email= $password = $cpassword = $contactnumber = "";
$name_err = $email_err= $password_err = $cpassword_err = $contactnumber_err =  "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter your Name.";
    }
    else{
        $name = $input_name;
    }

    // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter your email id.";
    }
    else{
        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
        {
            $email = $input_email;
        }
        else{
            $email_err= "Invalid email format";
        }
    }

    
    // Validate password
    $input_password = trim($_POST["password"]);
    $passwordlen=(strlen($input_password)>=6 && strlen($input_password)<=10);
    
    if(empty($input_password)){
        $password_err = "Please enter password.";     
    }
    elseif(!($passwordlen))
    {
        $password_err ="Password must be of 6 to 10 characters.";
    }
    else{
        $password = $input_password;
    }

    // Validate cpassword
    $input_cpassword = trim($_POST["cpassword"]);
    $cpasswordlen=(strlen($input_cpassword)>=6 && strlen($input_cpassword)<=10);
    
    if(empty($input_cpassword)){
        $cpassword_err = "Please confirm password.";     
    }
    
    elseif(!($cpasswordlen))
    {
        $password_err ="Password must be of 6 to 10 characters.";
    }
    elseif(!($input_password==$input_cpassword))
    {
        $cpassword_err ="Password does not match.";
    }
    else{
        $cpassword = $input_cpassword;
    }


    // Validate contactnumber
    $input_contactnumber = trim($_POST["contactnumber"]);
    $contactnumberlen=(strlen($input_contactnumber)==10);
    if(empty($input_contactnumber)){
        $contactnumber_err = "Please enter the contact number.";     
    }
    elseif(!($contactnumberlen))
     {
        $contactnumber_err = "Please enter 10 digit contact number.";
     }
    else{
        $contactnumber = $input_contactnumber;
    }

    
    // Check errors before querying database table.
    if(empty($name_err) && empty( $email_err) && empty( $password_err) &&  empty($cpassword_err) && empty( $contactnumber_err)) {
        
         
        $sql = "INSERT INTO `icecream users` (name, email,  contactnumber,  password) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){

            // Bind variables to the prepared statement.
            mysqli_stmt_bind_param($stmt, "ssis", $param_name, $param_email, $param_contactnumber,  $param_password);
            
            // Setting the parameters.
            $param_name = $name;
            $param_email = $email;
            $param_contactnumber = $contactnumber;
            $param_password = $password;
          
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                // Redirecting to landing page if records are inserted successfully.
                header("location: index.php");
                
                // Close statement
                mysqli_stmt_close($stmt);
                exit();
            } 
            else{
                $name_err ="User already exists.";
            }
        }
         
        
    }
    
    // Close connection
    mysqli_close($link);
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
   
    
</head>

<body>

    <h1 class="font">The Little Ice-Creamary</h1>
<div class="signup">
<h1 style="text-align:center; font-size: 40px; font-weight: 800; margin-top: 30px;">REGISTER HERE</h1>
<br></br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
	
	<div class="h1" value="<?php echo (!empty($name_err)); ?>">
		
		<input type="text" name="name" class="k" placeholder="User Name" value="<?php echo $name; ?>">
		<span><?php echo $name_err;?></span>
	</div>
    <br></br>
    <div class="h1" value="<?php echo (!empty($email_err)); ?>">
		
		<input type="text" name="email" class="k" placeholder="Email ID" value="<?php echo $email; ?>">
		<span><?php echo $email_err;?></span>
	</div>
    <br></br>
	<div class="h1" value="<?php echo (!empty($password_err)); ?>">
		
		<input type="password" name="password" class="k" placeholder="Password" value="<?php echo $password; ?>">
		<span><?php echo $password_err;?></span>
	</div>
    <br></br>
    <div class="h1" value="<?php echo (!empty($cpassword_err)); ?>">
		
		<input type="password" name="cpassword" class="k" placeholder="Confirm Password" value="<?php echo $cpassword; ?>">
		<span><?php echo $cpassword_err;?></span>
	</div>
    <br></br>
	<div class="h1" value="<?php echo (!empty($contactnumber_err)); ?>">
		
		<input type="text" name="contactnumber" class="k" placeholder="Contact Number" value="<?php echo $contactnumber; ?>">
		<span><?php echo $contactnumber_err;?></span>
	</div>
    <br></br>
    <div class="btn1">
	<input class="btn" type="submit" value="Submit">
    <br></br>
    <div  style="font-size: 50px; font-weight: bold"><a href="index.php" >Already have an account?</a>
    </div>
    </div>
</form>
</div>
</body>
</html>