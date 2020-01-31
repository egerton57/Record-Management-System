<?php 

//<a href="admin_delete.php?id='. $row["id"] .'"><button class="btn btn-primary btn-block">Yes</button>
 /*
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete '. $row['student_name'] .', Are you Sure?</h4>
        </div>
        <div class="modal-body">
          <a href="admin_delete.php?id='. $row["id"] .'"><button class="btn btn-primary btn-block">Yes</button>
          <button class="btn btn-default btn-block" type="button" class="close" data-dismiss="modal">No</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 */ 
  //echo "0 Results" ;

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Admin Records</title>
    <?php include ('asset.php');?>
  </head>
  <body class="subpage">

    <!-- Header -->
<?php include('Connection.php');
      include('admin_Header.php'); ?>

    <!-- One -->
      <section id="One" class="wrapper style3">
        <div class="inner">
          <header class="align-center">
            <p>BCC Records System</p>
            <h2>ADMIN: RECORDS</h2>
            <a href="admin_add_records.php"><button class="btn btn-success">Add Records</button></a> 
          </header>
        </div>
      </section>

    <!-- Two -->
      <section id="two" class="wrapper style2">
        <div class="inner">
          <div class="box">
            <div class="content">
                  <table class="alt">
                    <thead>
                      <tr>
                        <th>Rank</th>
                        <th>Index Number</th>
                        <th>Student Name</th>
                        <th>Maths</th>
                        <th>Science</th>
                        <th>English</th>
                        <th>Total</th>
                        <th>Average</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                <?php 

                  $sql2 = "SELECT * FROM results ORDER BY average DESC" ;

                  $result = mysqli_query($con,$sql2);


                if (mysqli_num_rows($result) > 0) {

                  while($row = mysqli_fetch_assoc($result)) {

                  echo '
                    <tbody>
                      <tr>
                        <td style="color:black"></td>
                        <td style="color:black">'. $row['index_no'] .'</td>
                        <td style="color:black">'. $row['student_name'] . '</td>
                        <td style="color:black">'. $row['maths'] .'</td>
                        <td style="color:black">'. $row['science'] .'</td>
                        <td style="color:black">'. $row['english'] .'</td>
                        <td style="color:black">'. $row['total'] .'</td>
                        <td style="color:black">'. $row['average'] .'</td>
                        <td><a href="admin_edit_records.php?id='.$row["id"].'"><button class="btn btn-warning">Edit</button></a></td>
                        <td><a href="admin_delete.php?id='. $row["id"] .'"><button class="btn btn-danger">Delete</button></td>
                      </tr>
                    </tbody>' ;

                  }

                } else {

                  echo "0 Results" ;

                }

                ?>

                  </table>
            </div>
          </div>
      </section>

    <!-- Footer -->
    <?php include ('Footer.php') ;?>
  </body>
</html>