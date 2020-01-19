<!DOCTYPE html>
<?php
	// STARTING SESSION
	session_start();
	if ($_SESSION['logged_in'] != TRUE) {
		header("location: login.php");
	}
	
	//ini_set('display_errors', 1);
	//ini_set('display_startup_errors', 1);
	//error_reporting(E_ALL);

	include('config.php');
?>

<?php
	$username = $_SESSION['username'];
	
	$query1 = "SELECT * FROM `acc_details` WHERE `email` = '$username'";
	$result1 = mysqli_query($conn, $query1);
	$row1 = $result1->fetch_assoc();
	$active = (int)$row1['active'];

	if ($active == 1) {
		header("location: usr_home.php");
	}

?>

<html lang = "en-gb" dir = "ltr">

<head>
	<title>10th International Mathematics, Education and Society(MES10) Conference</title>
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
	#home-active {	
	    color: black !important;
	    background-color: white  !important;
	}

</style>
<style>
.statusmsg {
    font-size: 15px; /* Set message font size  */
    padding: 10px 10px; /* Some padding to make some more space for our text  */
    background: #EDEDED; /* Add a background color to our status message   */
    border: 1px solid #DFDFDF; /* Add a border arround our status message   */
}
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


<br>
<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">E-mail Verification step:</span></strong></h4>
<br>
	
	<div class="statusmsg">
	<?php //echo $username; echo $active; ?>
	You have not completed your email verification.<br>

	A verification mail has been sent to <strong><?php echo $username; ?></strong><br>

	Click on the link provided in the mail to complete the verification.<br>
 	
	<!--Cannot find it? Click<a href="registration/send_mail.php" target="_top"> here</a> to resend the e-mail. <br> <br>

	<small>Note: Click on the latest e-mail verification link only.</small><br><br> -->
	</div>
	<br>	
	<p>
	<a href="registration/login.php" target="_top"> Click here </a> to go back to login.
	</p>
</div>


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





<?php session_destroy(); ?>
</body>

</html>
