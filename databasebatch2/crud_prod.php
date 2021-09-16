<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Customer Details</title>
  
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet"  href="style.css">

  <style type="text/css">
    
.fields {
  width: 100%;
  padding: 75px 5px 5px 5px;
}
.fields input {
  border: none;
  outline:none;
  background: none;
  font-size: 18px;
  color: #555;
  padding:20px 10px 20px 5px;
}
.username, .password {
  margin-bottom: 30px;
  border-radius: 25px;
  box-shadow: inset 8px 8px 8px #cbced1,
              inset -8px -8px 8px #ffffff;
}

  </style>

</head>

<body>
  

<!--heading for the view customer details!--> 
      
      <div class="jumbotron jumbotron-fluid">
          <div class="container-fluid">
            <center>
              <h1 class="display-4" >Products</h1>
             </center>
         </div>
      </div>


<!-- DISPLAY THE TABLE !-->
<div class="username">
    <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Prod. ID</th>
      <th scope="col">Prod. Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Min Reqd(in Stock)</th>
      <th scope="col">Price</th>
      <th colspan="2" scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    
    <?php

          $db = new mysqli("localhost","root","","inventory_management");

              $show_data = "select * from products";
              $query_show_data = mysqli_query($db,$show_data);

    while ($result = mysqli_fetch_array($query_show_data)){

                ?>

                  <tr>
                      
                      <!-- $rid=$result['id'];
                      $rnc=$result['name_cust'];
                      $rec=$result['email_cust']; 
                      $rpc=$result['phone_cust'];
                      $rg = $result['gender']; -->

                      

                      <td><?php echo $result['id']; ?></td>
                      <td><?php echo $result['prod_name']; ?></td>
                      <td><?php echo $result['quantity']; ?></td>
                      <td><?php echo $result['low_lim']; ?></td>
                      <td><?php echo $result['price']; ?></td>
                      <td><a href='update_inventory.php?id=<?php echo $result['id']; ?>' >EDIT</a></td>
                      <td>DELETE</td>

                  </tr>

                <?php

              }


            

        

      ?>  
    
  </tbody>
</table>


</div>
</div>
</body>

</html>