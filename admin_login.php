<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Login</title>
		<?php include ('asset.php');?>
	</head>
	<body class="subpage">

		<!-- Header -->
			<?php include ('Header.php') ;?>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>BCC Records System</p>
						<h2>ADMIN LOGIN PAGE</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">

				     <form class="w3-container" action="" method="post">
				        <div class="w3-section">
				          <label><b>Admin E-Mail:</b></label>
				          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter you E-Mail Address" name="email" required>
				          <label><b>Admin Password:</b></label>
				          <input class="w3-input w3-border" type="password" placeholder="Enter your Password" name="password" required> <br>
				         <button class="btn btn-primary btn-block" type="submit" value="Login" name="submit">Login</button>
				        </div>
				      </form>
				        <?php
				        if (isset($_POST["submit"])) {

				            if (!empty($_POST['email']) && !empty($_POST['password'])) {
				                $email = $_POST['email'];
				                $password = $_POST['password'];

				                $con = mysqli_connect('localhost', 'root', '', 'result') or die(mysqli_error());
				                $sql = "SELECT * FROM admin WHERE email='" . $email . "' AND password='" . $password . "' LIMIT 1";
				                $query = mysqli_query($con, $sql) or die(mysqli_error($con));


				                if (mysqli_num_rows($query) > 0) {
				                    $row = mysqli_fetch_assoc($query) or die(mysqli_error($con));
				                    if ($email == $row['email'] && $password == $row['password']) {
				                        session_start();
				                        $_SESSION['sess_users'] = $email;

				                        /* Redirect browser */
				                        header("Location: admin.php");
				                    }
				                } else {
				                    echo "Invalid username or password!";
				                }
				            } else {
				                echo "All fields are required!";
				            }
				        }
				        ?>

						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
		<?php include ('Footer.php') ;?>
	</body>
</html>