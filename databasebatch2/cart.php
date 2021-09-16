<!DOCTYPE html>
<html>
<head>
	<title></title>

			<meta charset="utf-8">
  			
  			<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- responsive website -->

  			     							 <!--Import Google Icon Font-->
      				<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      										<!--Import materialize.css-->
     				 <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  			
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  			
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  			
  			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  			
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body class="container">

	 <script type="text/javascript" src="js/materialize.min.js"></script> <!-- for display of the cards!!! -->

	<div class="jumbotron jumbotron-fluid">
          <div class="container-fluid">
            <center>
              <h1 class="display-4" >Products</h1>
             </center>
         </div>
      </div>


      				  <div class="row">

      <?php

      	$db = new mysqli("localhost","root","","inventory_management");

      	$select_query = " SELECT  `prod_name`, `quantity`, `low_lim`, `price` FROM `products` order by id ASC";
      	$show_select_query = mysqli_query($db,$select_query);

      	$num = mysqli_num_rows($show_select_query);

      	if($num > 0){

      		while ($product  = mysqli_fetch_array($show_select_query)) {
      			

      			// print_r($product);?>


      				  
    					<div class="col-lg-4 col-md-6 col-sm-12">
      						<form>
      						<div class="card">
        						<div class="card-image">
          							<img src="https://images.unsplash.com/photo-1535332371349-a5d229f49cb5?ixlib=rb-1.2.1&w=1000&q=80">
          								<span class="card-title"> <?php echo $product['prod_name']; ?> </span>
          									<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">	    add</i></a>
        						</div>
        					<div class="card-content">

        								<input type="number" name="quantity" placeholder="Quantity">

          								<p> <i class="material-icons">store</i> <?php echo $product['quantity']; ?> Units <br> &#x20b9;<?php echo $product['price']; ?> </p>
        					</div>
      						</div>
      						</form>
    					</div>
  					
            



      			<?php

      		}

      	}

      ?>
</div>
</body>
</html>