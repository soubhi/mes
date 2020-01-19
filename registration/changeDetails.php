<!DOCTYPE html>
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
	$username = $_SESSION['username'];
	$email = $username;
	
	$query = "SELECT * FROM `reg_details` WHERE `email` = '$email'";
	$result = mysqli_query($conn, $query);
	$row = $result->fetch_assoc();

	$lunch = (int)$row["lunch"];	
	$normalDinner = (int)$row["normal_dinner"];
	$reception = (int)$row["reception"];
	$confDinner = (int)$row["conf_dinner"];
	
	// DONATION
	$donation = (int)$row["donation"];

	$error = '';
	$success = '';

	$DisplayForm = True; //FOR DISAPPEARING THE FORM UPON SUBMISSION
	
	if(isset($_POST['Check'])) {

		//MEAL COUPONS
		$lunch = (int)$_POST["lunch"];	
		$normalDinner = (int)$_POST["normalDinner"];
		$reception = (int)$_POST["reception"];
		$confDinner = (int)$_POST["confDinner"];
		
		// DONATION
		$donation = (int)$_POST["donation"];

		// UPDATION
		$sql = "UPDATE `reg_details` SET `lunch` = '$lunch', `normal_dinner` = '$normalDinner', `reception` = '$reception', `conf_dinner` = '$confDinner', `donation` = '$donation' WHERE `email` = '$email'";
		$result = mysqli_query($conn, $sql);
		//echo "result = ".$result."<br>";
		
		if ($result != 1) {
			$error = 'Error updating details!';
		}
		else {
			$success = 'Details updated successfully! <br> 
			<div><a href="registration/usr_home.php" target="_top">Click here </a> to view the <b>fee details</b>.</div>';
			$DisplayForm = False;
		}
	}

?>

<script>
$(document).ready(function(){
   if ($("").text().length > 0) {
     $('#third').show();
   }                                           
 });

</script>

<html lang = "en-gb" dir = "ltr">
<head>
	<title> MES | Change Details </title>
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


<!------------------------form starts here----------------------------------------------------------------->
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
	    /*color:teal;*/
	    padding: 10px 10px; /* Some padding to make some more space for our text  */
	    background: #EDEDED; /* Add a background color to our status message   */
	    border: 1px solid #DFDFDF; /* Add a border arround our status message   */
	}
</style>


<div><a href="registration/usr_home.php" target="_top"> <br><< Back </b></a></div>
<br>
<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;"> Change number of Coupons or Donation Amount </span></strong></h4>
<br>
<?php if($DisplayForm == False) { ?>
<div class= "statusmsg"><?php echo $success; ?></div>
<?php } ?>

<?php if($DisplayForm) { ?>
	<div class="formContainer" align:"center">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="f1" method="post">
		<p>
			<lable for="lunch">Lunch coupons (<?php echo money_format('&#8377;%!n',150);?> each)</lable> <input type="number" name="lunch" min=0 placeholder="Enter number" value=<?php echo $lunch; ?>> <br>
			<lable for="normalDinner">Normal Dinner coupons (<?php echo money_format('&#8377;%!n',250);?> each)</lable> <input type="number" name="normalDinner" min=0 placeholder="Enter number" value=<?php echo $normalDinner; ?>> <br>
			<lable for="reception">Reception Dinner coupons (<?php echo money_format('&#8377;%!n',350);?> each)</lable> <input type="number" name="reception" min=0 placeholder="Enter number" value=<?php echo $reception; ?>> <br>
			<lable for="confDinner">Conerence Dinner coupons (<?php echo money_format('&#8377;%!n',750);?> each)</lable> <input type="number" name="confDinner" min=0 placeholder="Enter number" value=<?php echo $confDinner; ?> > <br>
		</p>
		<br>
		<lable for="donation">Donation (in Indian Rupees-INR)<b>&#8224;</b></lable> <input type="number" name="donation" min=0 value=<?php echo $donation; ?>> <br><br>
		
		<p style="text-align:right"> <b>&#8224; Note:</b> 50 US Dollar is approximately 3570 Rupees (INR) <br>
                50 Euro is approximately 4000 Rupees (INR) <br>
            </p>    
                
            <br>
		<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
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
