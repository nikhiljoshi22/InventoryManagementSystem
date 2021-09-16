<!DOCTYPE html>
<html>
  <head>
    <title>Display Customer Details</title>
  </head>
  <body bgcolor="#33FFDC">
    <div>
        <center>
          <h1 style="font-size: 50px">Customer Details</h1>
        </center>
        <center>
      <table border="5px" cellpadding="10px" bgcolor="yellow" style="font-family: sans-serif;">
        <thead style="font-size: 30px">
          <tr style="font-size:20px ">
            <th scope="col">Customer ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email Id</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Gender</th>
            <th colspan="2" scope="col">Operations</th>
          </tr>
        </thead>
  </body>


  <?php
  
  $db = new mysqli("localhost","root","","projectautodice");
  
  $show_data = "select * from customer";
  $query_show_data = mysqli_query($db,$show_data);
  
  while ($result = mysqli_fetch_array($query_show_data)){
  
    ?>
      
      <tr>
          <td align="center"><?php echo $result['cust_id']; ?></td>
          <td align="center"><?php echo $result['cust_Name']; ?></td>
          <td align="center"><?php echo $result['Email_ID']; ?></td>
          <td align="center"><?php echo $result['Phone_Number']; ?></td>
          <td align="center"><?php echo $result['Gender']; ?></td>
          <td><a href='customer_update.php?id=<?php echo $result['cust_id']; ?>' >EDIT</a></td>
          <td><a href="customer_delete.php?id=<?php echo $result['cust_id']; ?>">Delete</a></td>  
      </tr>
  
      <?php
  
  }

  ?>
</html>