<?php
session_start();
if(isset($_COOKIE['login']))
{
    $email=$_COOKIE['login'];
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{

    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION["$email"."_cart"]))
        {    
            $myitems=array_column($_SESSION["$email"."_cart"], 'item_name');
            if(in_array($_POST['item_name'], $myitems))
            {
                echo "<script> 
                     alert('Item is already added');
                     window.location.href='cart.php';
                </script>";
            }
             else
             {
                $count=count($_SESSION["$email"."_cart"]);
                $_SESSION["$email"."_cart"][$count]=array('item_name'=>$_POST['item_name'], 'price'=>$_POST['price'], 'quantity'=>1);
                   echo 
                   "<script> 
                        alert('Item is  added');
                        window.location.href='cart.php';
                   </script>";
                // print_r($_SESSION["$email"."_cart"]);
             }
           
        }
        else
        {
             $_SESSION["$email"."_cart"][0]=array('item_name'=>$_POST['item_name'], 'price'=>$_POST['price'], 'quantity'=>1);

             echo "<script> 
                     alert('Item is added');
                     window.location.href='cart.php';
                </script>";
            //  print_r($_SESSION["$email"."_cart"]);
        }
    }

    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION["$email"."_cart"] as $key=>$value)
        {
            if($value['item_name']==$_POST['item_name'])
            {
                unset($_SESSION["$email"."_cart"][$key]);
                $_SESSION["$email"."_cart"]=array_values($_SESSION["$email"."_cart"]);
                echo"
                <script>
                   alert('Item Removed');
                   window.location.href='cart.php';
                </script>
                
                ";

            }
          
        }
    }


    if(isset($_POST['change_quantity']))
    {
        foreach($_SESSION["$email"."_cart"] as $key=>$value)
        {
            if($value['item_name']==$_POST['item_name'])
            {
                $_SESSION["$email"."_cart"][$key]['quantity']=$_POST['change_quantity'];
               
                echo"
                <script>
                   window.location.href='cart.php';
                </script>
                
                ";

            }
          
        }

    }
}
?>