<?php

if(isset($_COOKIE['login']))
{
     if(isset($_POST['log_out']))
     {
          setcookie('login', 1, time()-3600);
          header("Location: index.php");
     }
   
    ?>
    <div class="background">
         <div class="inside-bg">
    <h1>Are you sure you want to Log Out?</h1>
    <form action="" method="POST">
         
               <button type="submit" name="log_out"  class="button" >Log Out</button>
               <button><a href="main.php">Back</a></button>
         
    </form>
</div>
</div>


<?php
}
else
header("Location: main.php");

?>


<style>
     *{
          padding: 0;
          margin: 0;
     }
     .background{
          background-image: url("images/skills-background1.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
     }

     .inside-bg{
          background-color: rgba(53, 48, 48, 0.438);
          height: 300px;
          margin-top: 20px;
          padding: 50px 80px;
          border-radius: 20px;
     }
.button{
     font-size: 30px;
     margin-right: 40px;
     margin-top: 50px;
     padding: 7px  ;
}

.button:hover{
      cursor: pointer;
     padding: 7px  ;
     background-color: black;
     color: blanchedalmond;
}
a{
     display: inline-block;
     text-decoration: none;
     color: black;     
     font-size: 30px;
     padding: 7px  ;
}

a:hover{
     cursor: pointer;
     padding: 7px  ;
     background-color: black;
     color: blanchedalmond;
}

h1{
     text-align: center;
     margin-top: 15px;   
     color: linen;
     padding: 10px;
     margin-top: 20px;
     font-size: 50px;
     font-weight: 900;
}
</style>
     
