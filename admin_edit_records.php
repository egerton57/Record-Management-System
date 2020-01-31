<?php
require('Connection.php');

$id=$_REQUEST['id'];

$query = "SELECT * from results where id='".$id."'";

$result = mysqli_query($con, $query) or die ( mysqli_error());

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<?php include ('asset.php');?>
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$index =$_REQUEST['index'];
$maths = $_REQUEST['maths'];
$science = $_REQUEST['science'];
$english = $_REQUEST['english'];
$total = null ;

if (is_numeric($maths) && is_numeric($science) && is_numeric($english)) {

  $total = ($maths + $science + $english);

} else {
  // do some error handling...
}

$average = $total/ 3 ;

$update="UPDATE results SET student_name='".$name."', index_no='".$index."', maths='".$maths."', science='".$science."', english='".$english."', total='".$total."', average='".$average."' WHERE id='".$id."'";

mysqli_query($con, $update) or die(mysqli_error());

$status = "Record Updated Successfully. </br></br><a href='admin_results.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['student_name'];?>" /></p>
<p><input type="text" name="index" placeholder="Enter Age" required value="<?php echo $row['index_no'];?>" /></p>
<p><input type="text" name="maths" placeholder="Enter Name" required value="<?php echo $row['maths'];?>" /></p>
<p><input type="text" name="science" placeholder="Enter Age" required value="<?php echo $row['science'];?>" /></p>
<p><input type="text" name="english" placeholder="Enter Name" required value="<?php echo $row['english'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>