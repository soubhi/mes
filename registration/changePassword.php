<!DOCTYPE html>
<?php
	// STARTING SESSION
	session_start();
	if ($_SESSION['logged_in'] != TRUE) {
		header("location: login.php");
	}
    /*
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    */
	
	include('config.php');
?>

<?php
	function rand_string( $length ) {
	    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789`~!@#$%^&*()-=_+";
	    $size = strlen( $chars );
	    $str = '';
	    for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	    }
	    return $str;
	}

	$error = '';
	$success = '';

	$DisplayForm = True; //FOR DISAPPEARING THE FORM UPON SUBMISSION

	if(isset($_POST['Check'])) {
		
		// EMAIL ID
		$emailID = $_SESSION['username'];
		
		
		// PASSWORDS
		$currPassword = $_POST["currPassword"];
		$newPassword = $_POST["newPassword"];
		$confPassword = $_POST["confPassword"];
		
		$query_hash = "SELECT * FROM `acc_details` WHERE `email` = '$emailID'";
		$result_hash = mysqli_query($conn, $query_hash);
		$row_hash = $result_hash->fetch_assoc();
		$hash = $row_hash['password'];
		$password = crypt($currPassword, $hash);
		//echo "<br>"."Password hash = ".$password."<br>";
		//echo "<br>"."hash = ".$hash."<br>";
		if (!password_verify($currPassword, $hash)) {
			$error ='Invalid current password!';
		} else {
			//$error ='Password matched!';
			if ($newPassword != $confPassword) {
				$error = 'New password and confirm password do not match!';
			}
			else {
				$salt =  rand_string(8);
				$password = crypt($newPassword, "$5$$salt");
				//echo "<br>"."Password hash = ".$password."<br>";
				$query = "UPDATE `acc_details` SET `password`='$password' WHERE `email`='$emailID';";
				$result = mysqli_query($conn, $query);
				//echo "result = ".$result."<br>";

				$success = 'Password updated successfully!<br>';
				$DisplayForm = False;
				//return;
			}
		}
	}
	
?>

<html lang = "en-gb" dir = "ltr">

<head>
	<title> MES | Forgot Password </title>
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
<style>
	.statusmsg {
	    font-size:15px; /* Set message font size  */
	    color:teal;
	    padding: 10px 10px; /* Some padding to make some more space for our text  */
	    background: #EDEDED; /* Add a background color to our status message   */
	    border: 1px solid #DFDFDF; /* Add a border arround our status message   */
	}
</style>

<div><a href="registration/usr_home.php" target="_top"> <br><< Back </b></a></div>
<br>
<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Change password: </span></strong></h4>
<br>
<?php if($DisplayForm == False) { ?>
<div class= "statusmsg"><?php echo $success; ?></div>
<?php } ?>

<!--<div style = "font-size:18px; color:teal; margin-top:10px"><?php echo $success; ?></div>-->

<!------------------------form starts here----------------------------------------------------------------->

<?php if($DisplayForm) { ?>
	<div class="formContainer" align:"center">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="f1" method="post">
		<p>		
		<lable for="currPassword"> Current Password: </lable> <input name="currPassword" type="password"> </br>
		</p>
		<div style = "font-size:15px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
		<br>
		<p>		
		<lable for="newPassword"> New Password: </lable> <input name="newPassword" type="password"> </br>
		</p>
		<p>		
		<lable for="confPassword"> Confirm New Password: </lable> <input name="confPassword" type="password"> </br>
		</p>
		<br>
		
	  <input type="submit" value="Submit" name="Check">
	</form> 
	</div>	
<?php } ?>

<!------------------------form ends here----------------------------------------------------------------->
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






</body>

</html>
