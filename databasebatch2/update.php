<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Customer Details</title>  
</head>

<body>
  
<center>
	<form method="post">

		<?php

require 'connection.php'; 

$id = $_GET['id'];

			  $data = "select * from customer where id=$id";
              $query_data = mysqli_query($db,$data);

              $show_field_data = mysqli_fetch_assoc($query_data);

session_start();
if(isset($_POST['submit']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$phoneNo = $_POST['phoneNo'];
$gender = $_POST['gender'];




$update_query = "UPDATE customer SET id=$id, name='$name' , email='$email' , phoneNo='$phoneNo', gender='$gender' where id = $id";

if (mysqli_query($db,$update_query)) {
	?>
    <script> alert ('data updated succesfully');</script>
<?php
}else {
	?>
    <script> alert ('data not updated succesfully');</script>
    <?php
}




}

?>
  
  <div>Welcome User</div>
  
  <div>
    <div><input type="Name" class="user-input" placeholder="Name" name="name_cust" value="Name" /></div>
    <div><input type="email" class="user-input" placeholder="E-Mail" name="email_cust" value="Email"/></div>
    <div><input type="phone" class="user-input" placeholder="Phone Number" name="phone_cust" value="Phone" /></div>
    		
    		<div>
    				
    			<p>Select a Gender:</p>

					<div>
  							<input type="radio" class ="user-input" name="gender" value="Male" />  Male
  							<br><br>
  							<input type="radio" class ="user-input" name="gender" value="Female"/>  Female
  							<br><br>
  							<input type="radio" class ="user-input" name="gender" value="Others"/>  Others
							<br><br>
					</div>
					
    		</div>
  </div>
  <button name="submit">UPDATE</button>
  <div> 
  </div>
</div>
</div>
</div>
</center>
</form>
</body>

</html>

