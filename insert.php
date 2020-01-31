<?php 
include('Connection.php');
	
    $name = $_POST['sname'];
    $index = $_POST['indexno'];
    $maths = $_POST['maths'];
    $science = $_POST['science'];
    $english = $_POST['english'];
    $total = null ;

if (is_numeric($maths) && is_numeric($science) && is_numeric($english)) {

  $total = ($maths + $science + $english);

} else {
  // do some error handling...
}

	$average = $total/ 3 ;

//Data insertion
$sql = "INSERT INTO results (student_name,index_no,maths,science,english,total,average) 
		VALUES ('$name','$index','$maths','$science','$english', '$total' , '$average')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);



header("Location: admin_results.php");
	
?>