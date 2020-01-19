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

<html lang = "en-gb" dir = "ltr">

<head>
	<title>MES | Forgot Password</title>
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

	
	<style>
	.statusmsg {
	    font-size: 15px; /* Set message font size  */
	    padding: 10px 10px; /* Some padding to make some more space for our text  */
	    background: #EDEDED; /* Add a background color to our status message   */
	    border: 1px solid #DFDFDF; /* Add a border arround our status message   */
	}
	</style>



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


</head>

<body>

<!------------ACTIVE TAB STYLE-------------------->


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


<!------------------------form starts here----------------------------------------------------------------->
<br>
<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;"> Account Recovery </span></strong></h4>
<br>

<?php

// RANDOM STRING GENERATOR FUNCTION FOR SALT
function rand_salt( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789`~!@#$%^&*()-=_+";
    $size = strlen( $chars );
    $str = '';
    for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];
    }
    return $str;
}

// RANDOM STRING GENERATOR FUNCTION FOR TEMPORARY PASSWORD
function rand_string( $length ) {
    //$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    //$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#$%&";
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#$%&";
    $size = strlen( $chars );
    $str = '';
    for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];
    }
    return $str;
}

?>

<?php
	$DisplayForm = True; //FOR DISAPPEARING THE FORM UPON SUBMISSION
	if(isset($_POST['Check'])) {
		
		$DisplayForm = False;
		// EMAIL ID
		$emailID = $_POST["emailID"];
		//echo $emailID;
		
		$sql1 = "INSERT INTO `forgot_pass` (`email`) VALUES ('$emailID');";
		$result1 = mysqli_query($conn, $sql1);
		//echo $result1;
			
	/**************************************verification process ***************************************/

	// PASSWORDS
	$temp = rand_string(8);
	//echo $verifyCode."<br>";
	$sql2 = "UPDATE `forgot_pass` SET `temp_pass` = '$temp' WHERE `email` = '$emailID';";
	$result2 = mysqli_query($conn, $sql2);

	$salt =  rand_salt(8);
	$password = crypt($temp, "$5$$salt");
	//echo "<br>"."Password hash = ".$password."<br>";
	$query = "UPDATE `acc_details` SET `password`='$password' WHERE `email`='$emailID';";
	$result = mysqli_query($conn, $query);
	//echo "result4 = ".$result4;
	
	/**********sending email *******************/

	// CREATED THIS MAIL IN cPANEL FOR TESTING

	define('EMAIL', 'webmaster@mes10.uohyd.ac.in');
	define('PASS', 'vPV9k423%=mR');

	// IMPORTING REQ. FILES
	require 'PHPMailerAutoload.php';
	//require 'credential.php';

	// CREATING MAILER OBJECT
	$mail = new PHPMailer();	

	// UNCOMMENT THE BELOW LINE TO SEE THE FLOW OF THE MAIL 
	//$mail->SMTPDebug = 4;                               

	// SETTING UP THE SMTP CONNECTION - found in 'cPanel' -> 'Email Accounts' -> 'Set Up Mail Client'
	$mail->isSMTP();                                   
	$mail->Host = 'cp-in-12.webhostbox.net';  		
	$mail->SMTPAuth = true;                             
	$mail->Username = EMAIL;                 
	$mail->Password = PASS;                  
	$mail->SMTPSecure = 'tls';                          
	$mail->Port = 587; //465;                                

	// EMAIL ADDRESSES
	$mail->setFrom(EMAIL);
	$mail->addAddress("$emailID");
	$mail->addReplyTo(EMAIL);

	$mail->isHTML(true);
	// AND THEN THE BODY 
	$mail->Subject = 'MES 10 - Forgot Password Request';
	$mail->Body    = "
 

A forgot password request has been recieved by MES10. <br>
Use this <b>temporary password</b> to login into your account<br>
<!--<div class=\"statusmsg\"><b>$temp</b></div>-->
<p style='font-size:16px;'><b>$temp</b></p>
";

/*http://mes10.uohyd.ac.in/mes/registration/verify.php?email=$emailID&hash=$hash$mail->Body    = "
 
A forgot password request has been recieved by MES10. <br>
Use this temporary password to login into your account
<div class=\"statusmsg\"> <font size = "5"> '$verifyCode'<br></div>"; */

	if (!$mail->send()) {
		echo 'Message could not be sent. Please try again.';
		//echo 'Mailer Error: ' . $mail->ErrorInfo;
	} 
	else {
		//echo $password;		
		//$_COOKIE['email'] = $emailID;
		
	}


/****************************************************************************************************/


//$msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';

	echo "<div class=\"statusmsg\"> An E-Mail carrying a temporary password has been successfully sent to <b>'$emailID'</b>.<br> Please use it to <a href=\"registration/login.php\" target=\"_top\"> login </a>into your <b>MES10</b> account and <b>Remember to change</b> your password.<br></div>"; 
	
	// Return Success - Valid Email		     
      } else 

?>

<?php if($DisplayForm) { ?>
	<div class="formContainer" align:"center">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="f1" method="post">


		<p>
		<label id="emailLabelID" for="emailID">Enter your registered <strong>E-Mail ID</strong> :</label>
		<input type="email" name="emailID" id="emailID" aria-label="emailLabelID" aria-describedby="instructions" required> </br>
		</p>
		
		<p id="instructions">
		MES10 will send a verification code to the e-mail.
		</p>		
		<br>
	
	  <input type="submit" value="Submit" name="Check">
	</form> 
	<br><br>
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
	<!---------------------------------end of sidebar-------------------------------->
	
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
