<!DOCTYPE html>
<html>
  <head>
    <title>Display Products</title>
  </head>
  <body bgcolor="#33FFDC">
    <div>
        <center>
          <h1 style="font-size: 40px">Products</h1>
        </center>
        <center>
      <table border="5px" cellpadding="5px" style="font-size: 20px; font-family: sans-serif;" bgcolor="yellow">
        <thead>
          <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Quantity Lower Limit</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        </center>
  </body>
</html>

  <?php
  
  $db = new mysqli("localhost","root","","projectautodice");
  
  $show_data = "select * from products ORDER BY Quantity ASC";
  $query_show_data = mysqli_query($db,$show_data);
  
  while ($result = mysqli_fetch_array($query_show_data)){
  
    ?>  
      <tr>
          <td align="center"><?php echo $result['prod_id']; ?></td>
          <td align="center"><?php echo $result['prod_Name']; ?></td>
          <td align="center"><?php echo $result['Quantity']; ?></td>
          <td align="center"><?php echo $result['QuantityLowerLimit']; ?></td>
          <td align="center"><?php echo $result['Price']; ?></td>
      </tr>
  
      <?php
  
  }

?>

