<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
		<?php include ('asset.php');?>
</head>
<body>

	<!-- Header -->
		 <header id="header" class="alt">
	        <div class="logo"><a href="admin.php">BCC <span>Records - Admin Panal</span></a></div>
	        <a href="#menu">Menu</a>
	     </header>

    <!-- Nav -->
      <nav id="menu">
        <ul class="links">
          <li><a href="admin.php">Dashboard</a></li>
          <li><a href="admin_results.php">View Records</a></li>
          <li><a href="admin_add_records.php">Add Records</a></li>
          <li><a href="logout.php">Logout &nbsp; <span class="glyphicon glyphicon-log-out"></span></a></li>
        </ul>
      </nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/Admin.jpg" alt="" />
					<div class="inner">
						<header>
							<p>BCC Records System</p>
							<h2>Admin Panel</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>BCC Records System</p>
										<h3>ADMIN: View Student's Details</h3>
									</header>
									<footer class="align-center">
										<a href="#" class="button alt">Visit</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>BCC Records System</p>
										<h3>ADMIN: View Records</h3>
									</header>
									<footer class="align-center">
										<a href="admin_results.php" class="button alt">Visit</a>
									</footer>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
<!-- Footer -->
<?php include ('Footer.php') ;?>
</body>
</html>