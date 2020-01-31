<!DOCTYPE HTML>
<html>
  <head>
    <title>Student's Details</title>
    <?php include ('asset.php');?>
  </head>
  <body class="subpage">

    <!-- Header -->
      <?php include ('Header.php') ;
            include ('Connection.php');
      ?>

    <!-- One -->
      <section id="One" class="wrapper style3">
        <div class="inner">
          <header class="align-center">
            <p>BCC Records System</p>
            <h2>STUDENT'S DETAILS</h2>
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
                        <th>No.</th>
                        <th>Index Number</th>
                        <th>Student Name</th>
                      </tr>
                    </thead>
                <?php 

                $sql2 = "SELECT index_no,student_name FROM results ORDER BY index_no ASC" ;

                $result = mysqli_query($con,$sql2);


                if (mysqli_num_rows($result) > 0) {

                  while($row = mysqli_fetch_assoc($result)) {

                  echo '
                    <tbody>
                      <tr>
                        <td style="color:black"></td>
                        <td style="color:black">'. $row['index_no'] .'</td>
                        <td style="color:black">'. $row['student_name'] . '</td>
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