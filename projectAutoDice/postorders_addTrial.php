<?php
  require 'connection.php';
  if (isset($_POST['submit']))
     {  
         $cust_id              = $_POST['cust_id'];
         $prod_id              = $_POST['prod_id'];
         $date_of_order        = $_POST['date_of_order'];
         $quantity_order       = $_POST['quantity_order'];

         $query = "INSERT INTO orders VALUES(' ','$cust_id','$prod_id','$date_of_order','$quantity_order') ";
         
         if (mysqli_query($conn, $query))
             {
                $query="UPDATE products SET Quantity= (Quantity - '$quantity_order') WHERE prod_id=$prod_id";
                $result = mysqli_query($conn,$query);
                header("Location: orders_disp.php");
             }
             else
             {
             header("Location: orders_disp.php");
             }
     }
 ?>
 