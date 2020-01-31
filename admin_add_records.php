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
            <h2>ADMIN: ADD RECORDS</h2>
          </header>
        </div>
      </section>
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<form action="insert.php" method="post">

								<div class="form-group">
									<label>Student Name: </label>
										<input type="name" name="sname" class="form-control"> 
								</div> 

								<br>

								<div class="form-group">
									<label>Index No:</label>
										<input type="name" name="indexno" class="form-control"> 
								</div>

								<br>

								<div class="form-group">
									<label>Maths:</label>
										<input type="number" name="maths" class="form-control"> 
								</div>

								<br>

								<div class="form-group">
									<label>Science:</label>
										<input type="number" name="science" class="form-control"> 
								</div> 

								<br>

								<div class="form-group">
									<label>English:</label>
										<input type="number" name="english" class="form-control"> 
								</div>

								<br>

								<input type="submit" class="btn btn-primary">
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
<br><br><br>
<!-- Footer -->
<?php include ('Footer.php') ;?>
</body>
</html>