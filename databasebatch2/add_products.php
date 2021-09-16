<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Customer Details</title>
  
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css">

  <style type="text/css">
    
.maaargin{
  margin-top: 50px;
  margin-bottom:  50px;

}
/*.background_black{
  background-color: #000000;
}*/

.login-div {
  width:500px;
  height: 900px;
  padding: 60px 35px 35px 35px;
  border-radius: 40px;
  background: #ecf0f3;
  box-shadow: 13px 13px 20px #cbced1,
              -13px -13px 20px #ffffff;

}

.title {
  text-align: center;
  font-size: 28px;
  padding-top: 24px;
  letter-spacing: 0.5px;
}
.sub-title {
  text-align: center;
  font-size: 15px;
  padding-top: 7px;
  letter-spacing: 3px;
}



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

.fields svg {
  height: 22px;
  margin:0 10px -3px 25px;
}

.signin-button {
  outline: none;
  border:none;
  cursor: pointer;
  width:100%;
  height: 60px;
  border-radius: 30px;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Lato', sans-serif;
  color:#fff;
  text-align: center;
  background: #24cfaa;
  box-shadow: 3px 3px 8px #b1b1b1,
              -3px -3px 8px #ffffff;
  transition: 0.5s;
}
.signin-button:hover {
  background:#2fdbb6;
}
.signin-button:active {
  background:#1da88a;
}
.link {
  padding-top: 20px;
  text-align: center;
}
.link a {
  text-decoration: none;
  color:#aaa;
  font-size: 15px;
}

.left {
  float: left;
  
}
  </style>

</head>

<body>
  
<center>
  <div class="background_black">
  <div class="maaargin">
  <div class="login-div">

  <form method="post" enctype="multipart/form-data">
  
  <div class="title">Welcome ADMIN</div>
  <div class="sub-title">Add the Components Information</div>
  <div class="fields">
    <div class="username"><input type="name" class="user-input" placeholder="Name of Product" name="prod_name" /></div>
    <div class="username"><input type="number" class="user-input" placeholder="Quantity" name="quantity"/></div>
    <div class="username"><input type="number" class="user-input" placeholder="Minimum quantity" name="low_lim" /></div>
    <div class="username"><input type="number" class="user-input" placeholder="Price of The product" name="price" /></div>
        
        
  </div>
  <button class="signin-button" name="submit">SUBMIT</button><br>
  <div class="link">
    <a href="crud_cust.php">View All Customer Details</a><br><br>
    <a href="crud_prod.php">View All Product Details</a> 
  </div>
</div>
</div>
</div>
</center>
</form>
</body>

</html>

<?php

$db = new mysqli("localhost","root","","inventory_management");

session_start();
if(isset($_POST['submit']))
{

$prod_name = $_POST['prod_name'];
$quantity = $_POST['quantity'];
$low_lim = $_POST['low_lim'];
$price = $_POST['price'];


$insert_query = "INSERT INTO products VALUES ('','$prod_name','$quantity','$low_lim','$price')";

if (mysqli_query($db,$insert_query)) {
  ?>
    <script> alert ('Components added in Inventory succesfully');</script>
<?php
}else {
  ?>
    <script> alert ('Data not inserted succesfully');</script>
    <?php
}




}

?>