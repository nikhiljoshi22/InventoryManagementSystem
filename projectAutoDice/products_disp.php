<!DOCTYPE html>
<html>
  <head>
    <title>Display Products</title>
  </head>
  <body bgcolor="#33FFDC">
    <center>
    <a style="font-size: 20px; font-family: sans-serif;" href="trial.php">Sort By Price</a><br><br>
    <a style="font-size: 20px; font-family: sans-serif;" href="trial2.php">Sort By Quantity</a><br><br>
    <a style="font-size: 20px; font-family: sans-serif;" href="trial3.php">Sort By Product Name</a>
    </center>
    <div>
        <center>
          <h1 style="font-size: 40px; font-family: sans-serif;">Products Details</h1>
        </center>
        <center>
      <table border="5px" cellpadding="5px" style="font-size: 20px; font-family: sans-serif;" bgcolor="yellow">
        <thead style="font-size: 30px">
          <tr style="font-size:20px ">
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Quantity Lower Limit</th>
            <th scope="col">Price</th>
            <th colspan="2" scope="col">Operations</th>
          </tr>
        </thead>
        </center>
  </body>
</html>

  <?php
  
  $db = new mysqli("localhost","root","","projectautodice");
  
  $show_data = "select * from products";
  $query_show_data = mysqli_query($db,$show_data);
  
  while ($result = mysqli_fetch_array($query_show_data)){
  
    ?>  
      <tr>
          <td align="center"><?php echo $result['prod_id']; ?></td>
          <td align="center"><?php echo $result['prod_Name']; ?></td>
          <td align="center"><?php echo $result['Quantity']; ?></td>
          <td align="center"><?php echo $result['QuantityLowerLimit']; ?></td>
          <td align="center"><?php echo $result['Price']; ?></td>
          <td><a href='products_update.php?id=<?php echo $result['prod_id']; ?>' >EDIT</a></td>
          <td><a href='products_delete.php?id=<?php echo $result['prod_id']; ?>' >DELETE</a></td>
  
      </tr>
  
      <?php
  
  }

?>

