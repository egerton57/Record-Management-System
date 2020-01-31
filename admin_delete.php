<?php
require('Connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM results WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: admin_results.php"); 
?>