<?php

// php select option value from database

require 'connection.php';

// mysql select query
$query1 = "SELECT prod_id FROM products";

// for method 2

$result1 = mysqli_query($conn, $query1);

$options1 = "";

while($row1 = mysqli_fetch_array($result1))
{
    $options1 = $options1."<option>$row1[0]</option>";
}

?>
<?php

// php select option value from database

require 'connection.php';

// mysql select query
$query2 = "SELECT cust_id FROM customer";

// for method 2

$result2 = mysqli_query($conn, $query2);

$options2 = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options2 = $options2."<option>$row2[0]</option>";
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Orders</title>
  </head>
  <body bgcolor="#33FFDC">
    <center>
    <a style="font-size: 20px; font-family: sans-serif;" href="customer_disp.php">View All Customer Details</a><br><br>
    <a style="font-size: 20px; font-family: sans-serif;" href="products_disp.php">View All Products Details</a><br><br>
    <a style="font-size: 20px; font-family: sans-serif;" href="orders_disp.php">View All Orders Placed</a><br><br>
    <a style="font-size: 20px; font-family: sans-serif;" href="compare.php">Quantity of products less than limit</a>
      <h1>Place Orders</h1>
      <form action="postorders_addTrial.php" method="post" style="font-size: 20px; font-family: sans-serif;  ">      
        <p style="font-size: 20px">Enter Customer ID</p>
        <select  name="cust_id" style="font-size: 15px; font-family: sans-serif; background-color: yellow">
        <option value="0" >--Select Customer ID--</option>
            <?php echo $options2;?>
        </select>
        <p>Select Product ID</p>
        <select name="prod_id" style="font-size: 15px; font-family: sans-serif; background-color: yellow">
        <option value="0">--Select Product ID--</option>
            <?php echo $options1;?>
        </select>
        <p>Enter date</p>
        <input style="font-size: 15px; font-family: sans-serif; background-color: yellow" id="exp-date" name="date_of_order" type="text"  readonly="" value="<?php $date_of_order = date('yy-m-d');
          echo $date_of_order;?>" ><br><br>
        <p>Quantity</p>
        <input style="font-size: 15px; font-family: sans-serif; background-color: yellow" type="text" name="quantity_order" placeholder="Enter Quantity"><br><br>
        <button style="font-size: 20px; font-family: sans-serif; background-color: yellow" name="submit" value="submit">Submit</button>
      </form>
    </center>
  </body>
</html>
