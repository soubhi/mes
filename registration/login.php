<!DOCTYPE html>
<?php
	// STARTING SESSION
	session_start();
	if ($_SESSION['logged_in'] == TRUE) {
		header("location: usr_home.php");
	}

	$error = '';
	/*ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
*/
	
	include ('config.php');
?>

<?php

	if(isset($_POST['Check'])) {
		// EMAIL ID
		$emailID = $_POST["emailID"];

		// PASSWORDS
		$password = $_POST["password"];
		
		$query_hash = "SELECT * FROM `acc_details` WHERE `email` = '$emailID'";
			$result_hash = mysqli_query($conn, $query_hash);
			$row_hash = $result_hash->fetch_assoc();
			$hash = $row_hash['password'];

if (password_verify($password, $hash)) {
		    echo 'Password is valid!';

		// FULL NAME
		$query = "SELECT * FROM `reg_details` WHERE `email` = '$emailID'";
		$result = mysqli_query($conn, $query);
		$row = $result->fetch_assoc();

		$firstName = $row['first_name'];
		$lastName = $row['last_name'];

		$_SESSION['fullname'] = "Welcome $firstName $lastName";

		    echo $_SESSION['logged_in'] = TRUE;
		    echo $_SESSION['username'] = $emailID;
		    header("location: usr_home.php");
		} else {
		    $error ='Invalid E-mail ID or password.';
		}
	}	
?>

<html lang = "en-gb" dir = "ltr">

<head>
	<title>MES | Login</title>
	<base href="/mes/" />
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name = "viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href = "style.css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="javascript/jquery-1.10.2.js"></script>
</head>

<body>

<!------------ACTIVE TAB STYLE-------------------->
<style>
	
</style>



<!------------------------------------heading----------------------------------------->
	<div id="heading-placeholder">

	<?php
		$include_path = "/var/www/html/mes";
		$use_page="TRUE";
		include("$include_path/components/heading.php");
	?>

	</div>
<!---------------------------------end of heading------------------------------------->





<!---------------------------------Navigation bar------------------------------------->
	<div id="nav-placeholder">

	<?php
		include("$include_path/components/navigation-bar.php");
	?>

	</div>
<!-----------------------------end of Navigation bar----------------------------------->



<div class="container" id="maincontent">
	<div class="row">

	<!--------------------------------page main content------------------------------->
		<div class="col-md-8">

<style>
	label {
	    display: inline-block;
	    width:100px;
	    text-align: right;
	}

	.formContainer {
	  width: 500px;
	  clear: both;
	  padding-left: 50px;
	}

	.formContainer input {
	  width: 100%;
	  clear: both;
	}
</style>

<br>
<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Login here: </span></strong></h4>
<br>


<!------------------------form starts here----------------------------------------------------------------->

	<div class="formContainer" align:"center">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="f1" method="post">
		<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

		<p>
		<lable for="emailID"> Email: </lable> <input type="email" name="emailID"> </br>
		</p>
	
		<p>		
		<lable for="password"> Password: </lable> <input type="password" name="password"> </br>
		</p>

		<p>
		<a href="registration/forgot_pass.php" target="_top">Forgot password?</a>
		</p>
		<br>
	
		<input type="submit" value="Submit" name="Check">
		</form> 
		<br>
		<br>
		<p>
		Did not register yet?<a href="registration/signUp.php" target="_top"> click here </a> to register.
		</p>
		<br>	
	</div>	

		</div>


<!------------------------form ends here----------------------------------------------------------------->

	<!------------------------end of page main content------------------------------->


	<!------------------------------------sidebar------------------------------------>
		<div class="col-md-4">
			<div class="row">
				<div id="sidebar-dates-placeholder">
				
				<?php	
					include("$include_path/components/sidebar-dates.php");
				?>

				</div>
			</div>

			<div class="row">
		
			<?php	
				include("$include_path/components/poster.php");
			?>

			</div>
			<div class="row">
				<div id="sidebar-photos-placeholder">
				<?php	
					include("$include_path/components/sidebar-photos.php");
				?>
				</div>					
			</div>
		</div>
	<!---------------------------------end ofsidebar-------------------------------->
	
	</div>
</div>



<!-----------------footer---------------------------->
	<div id="footer-placeholder">
	<?php
		include("$include_path/components/footer.php");
	?>
	</div>
<!------------end of footer--------------------------->






</body>

</html>
