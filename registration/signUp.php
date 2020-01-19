<!DOCTYPE html>
<?php
	// STARTING SESSION
	
	if(isset($_SESSION)) 
    { 
		if ($_SESSION['logged_in'] == TRUE) {
			header("location: usr_home.php");
		}
	}else
		session_start();

	$error = '';
	/*ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);*/
	
	include ('config.php');

?>
<!DOCTYPE html>

<html lang = "en-gb" dir = "ltr">

<head>
	<title>MES | Registration</title>
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
		$include_path = "/var/www/html/mes/";
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

		// FIRST NAME
		$firstName = $_POST["firstName"];
		//echo $firstName;		
		//echo "<br>";

		// LAST NAME
		$lastName = $_POST["lastName"];

		// INSTITUTIONAL AFFILIATION
		$institution = $_POST["institution"];

		// PRESENT POSITION
		$position = $_POST["position"];	
		//echo $position;
		
		// SUMBISSIONS
		$subPapers = (int)$_POST["subPapers"];

		$subSymposiums = (int)$_POST["subSymposiums"];

		$subProjects = (int)$_POST["subProjects"];

		$subPosters = (int)$_POST["subPosters"];

		// COUNTRY 
		$currentCountry = $_POST["currentCountry"];

		$originCountry = $_POST["originCountry"];

		// EMAIL ID
		$emailID = $_POST["emailID"];

		// PASSWORDS
		$passwordPlain = $_POST["password"];
		$salt =  rand_string(8);
		$password = crypt($passwordPlain, "$5$$salt");

		$confirmPassword = $_POST["confirmPassword"];
		
		//MEAL COUPONS
		$lunch = (int)$_POST["lunch"];	
		$normalDinner = (int)$_POST["normalDinner"];
		$reception = (int)$_POST["reception"];
		$confDinner = (int)$_POST["confDinner"];
		
		// DONATION
		$donation = (int)$_POST["donation"];

		// ERRORS ON SUBMITTING THE FORM 
		

		$errors= array();
			if (strcmp($passwordPlain, $confirmPassword) < 0) {
				  $errors[]="Passwords are not matching.Please Re-enter the password.";
			}
			
			if (empty($errors)==true) {
				// INSERTING DETAILS INTO DATABASE
				$sql1 = "INSERT INTO `acc_details` (`email`, `password`) VALUES ('$emailID', '$password');";
				$result3 = mysqli_query($conn, $sql1);
				$sql2 = "INSERT INTO `reg_details` (`email`,`first_name`, `last_name`, `institution`, `position`, `no_sub_pap`, `no_sub_symp`, `no_sub_proj`, `no_sub_pos`, `country_work`, `country_orig`, `lunch`, `normal_dinner`, `reception`, `conf_dinner`, `donation`) VALUES ('$emailID','$firstName', '$lastName', '$institution', '$position', $subPapers, $subSymposiums, $subProjects, $subPosters, '$currentCountry', '$originCountry','$lunch' ,'$normalDinner','$reception' ,'$confDinner', $donation);";
				$result4 = mysqli_query($conn, $sql2);
				//echo "result3 = ".$result3."<br>";
				//echo "Successfully Submitted!\n"

				if ($result3 != 1) {
					//print_r("Error submitting the form. Please try again.\n");
					echo '<div class="statusmsg"> Error submitting the form. Please try again.<br></div>'; 	
				} else {





				
/**************************************verification process ***************************************/
$hash = md5( rand(0,1000) );
//echo $hash."<br>";
$activationCode = rand(100000,999999);
//echo $activationCode."<br>";
$sql2 = "UPDATE `acc_details` SET `hash` = '$hash', `activationCode` = '$activationCode' WHERE `email` = '$emailID';";
$result4 = mysqli_query($conn, $sql2);
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
	$mail->Subject = 'MES 10 - Registration Verification';
	$mail->Body    = "
 
Thanks for registering! <br>
Your account has been created, please click following link to activate your account: <br>
http://mes10.uohyd.ac.in/mes/registration/verify.php?email=$emailID&hash=$hash
";
//http://mes10.uohyd.ac.in/mes/registration/verify.php?email=$emailID&hash=$hash

	if (!$mail->send()) {
		echo 'Message could not be sent. Please try again.';
		//echo 'Mailer Error: ' . $mail->ErrorInfo;
	} 
	else {
		//echo 'Message has been sent';
		echo '';
	}


/****************************************************************************************************/


//$msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';

	echo "<div class=\"statusmsg\"> Registration Successful.<br> Please click on the link sent to '$emailID' to activate your account. <br></div>"; 
	}
		} else {
	 			print_r($errors[0]);
		}

		// Return Success - Valid Email
		     
      }

?>


<style>
	label {
	    display: contents;
	    width:100px;
	    /*text-align: right;*/
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

<script ="javascript">
		function validate() {
			
				//password validation 
				if(f1.password.value.length < 8) {
					alert("Password length should be minimum 8 characters");
					f1.password.focus();
				return false;
				}if(f1.password.value != f1.confirmPassword.value) {
					alert("Password and confirm password donot match!");
					//f1.password.focus;
					f1.confirmPassword.focus();
				return false;
				} 
				if (f1.originCountry.value == "noneselected") {
					alert("Please select country of origin");
					f1.originCountry.focus();
					return false;
				}
				if (f1.currentCountry.value == "noneselected") {
					alert("Please select the country where you currently reside or work");
					f1.currentCountry.focus();
					return false;
				}
				if (f1.position.value == "noneselected") {
					alert("Please enter present positon");
					f1.position.focus();
					return false;
				}		
		
				return true;
		}
</script>
<script type="text/javascript">
	function showfield(name) {
		if (name=='other')
			document.getElementById('otherPositonDiv').innerHTML='Please enter the position: <input type="text" name="position" />';
	  	else
			document.getElementById('otherPositonDiv').innerHTML='';
	}
</script>

<br>
<h2><strong><span style="font-size:17pt;text-align:justify;color:#008080;"> Registration Form </span></strong></h2>
<br>

<p>
If already registered please <a href="registration/login.php" target="_top"> click here </a> to login.
</p>
<br>
	<div class="formContainer" align:"center">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="f1" method="post" onsubmit="return validate()">


		<p>
		<label for="emailID"> Email (required): </label> <input type="email" name="emailID" id="emailID" aria-describedby="emailInstructionId" required aria-label="Email"/> </br>
		<span id="emailInstructionId">**Note: Enter the E-mail Id that was used for paper submission,if submitted any.</span><br />
		</p>
	
		<p>		
		<label for="password"> Create password (required): </label> <input type="password" name="password" id="password" required aria-label="Create Password"/> </br>
		</p>

		<p>
		<label for="confirmPassword"> Confirm password (required): </label> <input type="password" aria-describedby="pwdInstructionId" name="confirmPassword" id="confirmPassword" required aria-label="Confirm Password" /> </br>
		<span id="pwdInstructionId">*Note: The above entered e-mail id and password will be used for your future <em>MES10 account</em> <strong>login</strong>.</span><br />
		</p>
		<br />

		<p>
		<label for="firstName"> First name (required): </label> <input type="text" name="firstName" id="firstName" required aria-label="First name" /><br>
		</p>

		<p>
		<label style="text-align:left;" for="lastName"> Last name (required): </label> <input type="text" name="lastName" id="lastName" aria-label="Last name" required /><br>
		</p>		
		<br>

		<p>
		<label for="institution"> Institutional affiliation (if any)  (required): </label> <input type="text" name="institution" id="institution" required aria-label="Institutional affiliation (if any)"/><br>
		</p>
		<br>

		<p>
		<label for="position"> Present Postion : </label>
		<select name="position" id="position" onchange="showfield(this.options[this.selectedIndex].value)" aria-label="Present Position">
			<option value="noneselected" selected>- select -</option>
			<option value="Full Professor"> Full Professor </option>	
			<option value="Asso. Professor"> Asso. Professor </option>	
			<option value="Asst. Professor"> Asst. Professor </option>	
			<option value="Postdoctoral Fellow"> Postdoctoral Fellow </option>	
			<option value="Doctoral Student"> Doctoral Student </option>	
			<option value="Masters Student"> Master's Student </option>	
			<option value="Independent scholar"> Independent Scholar </option>	
			<option value="other"> Other </option>	
	 	</select> 
		<div id="otherPositonDiv"> </div> <br>
		</p>

		<div role="group" aria-labelledby="noOfSubmissionsLabel">
			<p>
			<label id="noOfSubmissionsLabel"> Please Indicate the number of submissions : </label> <br>
				<label for="subPapers"> Papers </label> <input type="number" aria-label="Papers" name="subPapers" id="subPapers" min='0' value='0' /> <br>
				<label for="subSymposiums"> Symposiums </label> <input type="number" aria-label="Symposiums" name="subSymposiums" id="subSymposiums" min='0' value='0' /> <br>
				<label for="subProjects"> Projects </label> <input type="number" aria-label="Projects" name="subProjects" id="subProjects" min='0' value='0' /> <br>
				<label for="subPosters"> Posters </label> <input type="number" aria-label="Posters" name="subPosters" id="subPosters" min='0' value='0' /> <br>
			</p>
		</div>
		<br>

		<?php
			$query = 'SELECT `country_name` FROM `country` ORDER BY `country`.`country_name` ASC';
			$result = mysqli_query($conn, $query);

		?>
		<p>
		<label for="currentCountry" id="countryId"> Country where you currently reside and work : </label> <br> 
			<select name="currentCountry" aria-labelledby="countryId">
				<option value="noneselected"> - select country - </option>
			<?php while($row = mysqli_fetch_assoc($result)) : 
				$string = $row['country_name'];	?>
				<option value="<?php echo $string?> "> <?php echo $string?> </option>
			<?php endwhile ?>
			</select> </br>
		</p>
		<br>

		<?php mysqli_data_seek($result,0); ?>
		<p>
		<label for="originCountry" id="countryoriginId" > Country of Origin : </label> <br> 
			<select name="originCountry" aria-labelledby="countryoriginId">
				<option value="noneselected"> - select country - </option>
			<?php while($row = mysqli_fetch_assoc($result)) : 
				$string = $row['country_name'];	?>
				<option value="<?php echo $string?> "> <?php echo $string?> </option>
			<?php endwhile ?>
			</select> </br>
		</p>
		<br>

		<div role="group" aria-labelledby="mealdetailsId">
			<p>
			<lable id="mealdetailsId">  If you would like any meal coupons for the accompanying persons, please indicate the number of coupons needed: </lable> <br>
				<label for="lunch">Lunch coupons (<?php echo money_format('&#8377;%!n',150);?> each)</label> <input type="number" name="lunch" aria-label="Lunch coupons" min=0 placeholder="Enter number" value=0 /> <br>
				<label for="normalDinner">Normal Dinner coupons (<?php echo money_format('&#8377;%!n',250);?> each)</label> <input type="number" aria-label="Normal Dinner coupons" name="normalDinner" min=0 placeholder="Enter number" value=0 /> <br>
				<label for="reception">Reception Dinner coupons (<?php echo money_format('&#8377;%!n',350);?> each)</label> <input type="number" aria-label="Reception Dinner coupons" name="reception" min=0 placeholder="Enter number" value=0 /> <br>
				<label for="confDinner">Conerence Dinner coupons (<?php echo money_format('&#8377;%!n',750);?> each)</label> <input type="number" aria-label="Conerence Dinner coupons" name="confDinner" min=0 placeholder="Enter number" value=0 /> <br>
			</p>
		</div>
		<br>
		<lable for="donation" id="donationId">Donation (in Indian Rupees-INR)<b>&#8224;</b></lable> <input type="number" aria-labelledby="donationId" aria-describedby="donationInstructionId" name="donation" min=0 value=0> <br><br>
		
		    <p style="text-align:right" id="donationInstructionId"> <b>&#8224; Note:</b> 50 US Dollar is approximately 3570 Rupees (INR) <br>
                50 Euro is approximately 4000 Rupees (INR) <br>
            </p>    
                
            <br>
	
	  <input type="submit" value="Submit" name="Check">
	</form> 
	<br><br>
	</div>	

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
