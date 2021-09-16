<?php

$Order_id = $_GET['id'];

require 'connection.php';

// sql to delete a record
$sql = "DELETE FROM orders WHERE Order_id = $Order_id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: orders_disp.php'); //If customer_disp.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}

?>