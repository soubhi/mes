<!DOCTYPE html>
<?php 
	/*
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    	*/
    
	include('config.php');

?>
<html lang = "en-gb" dir = "ltr">

<head>
	<title>Verification</title>
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
#wrap .statusmsg {
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


<h2><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Change password</span></strong></h2>

<?php

// RANDOM STRING GENERATOR FUNCTION
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

?>

<?php	
	if(isset($_POST['Check'])) {
		$emailID = $_COOKIE['email'];
		echo $emailID."<br>";	
		$newPassword = $_POST["newPassword"];
		$confPassword = $_POST["confPassword"];
		
		echo $newPassword."<br>";
		echo $confPassword."<br>";
	
		if (strcmp($newPassword, $confPassword) < 0) {
			echo 'New password and confirm password do not match!';
			//echo $error;
		}
		else {
			$salt =  rand_string(8);
			$password = crypt($newPassword, "$5$$salt");
			echo "<br>"."Password hash = ".$password."<br>";
			$query = "UPDATE `acc_details` SET `password`='$password' WHERE `email`='$emailID';";
			$result = mysqli_query($conn, $query);
			echo "result = ".$result."<br>";

			echo 'Password successfully updated';
			//echo $success;
			echo '<div class="statusmsg"><a href="registration/login.php" target="_top">Click here </a> to login.</div>';
		}
		
	} else {
		echo "Error in submitting";	
	}
?>


<!------------------------form starts here----------------------------------------------------------------->

	<div class="formContainer" align:"center">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="f1" method="post">
		<?php /* $emailID = $_SESSION['username'];
		echo $emailID;*/	
		?>
		<p>		
		<lable for="newPassword"> New Password: </lable> <input name="newPassword" type="password"> </br>
		</p>
		<p>		
		<lable for="confPassword"> Confirm New Password: </lable> <input name="confPassword" type="password"> </br>
		</p>
	  <input type="submit" value="Submit" name="Check">
	</form> 
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
