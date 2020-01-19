<!DOCTYPE html>

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


<h2><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Verificaiton Status</span></strong></h2>
<style>
#wrap .statusmsg {
    font-size: 15px; /* Set message font size  */
    padding: 10px 10px; /* Some padding to make some more space for our text  */
    background: #EDEDED; /* Add a background color to our status message   */
    border: 1px solid #DFDFDF; /* Add a border arround our status message   */
}
</style>
    <!-- start wrap div -->   
    <div id="wrap">
        <!-- start PHP code -->
    <?php
         
    /*
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    */
    
	include('config.php');
             
	if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
	    // Verify data
	    $email = $_GET['email']; // Set email variable
	    $hash = $_GET['hash']; // Set hash variable
		         
	    $search = mysqli_query($conn, "SELECT email, hash, active FROM acc_details WHERE email='$email' AND hash='$hash' AND active=0"); 
	    $match  = mysqli_num_rows($search);
		         
	    if($match > 0){
		// We have a match, activate the account
		mysqli_query($conn, "UPDATE acc_details SET active='1' WHERE email='$email' AND hash='$hash' AND active=0");
		echo '<div class="statusmsg">Your account has been activated, you can <a href="registration/login.php" target="_top"> click here </a> to login</div>';
	    }else{
		// No match -> invalid url or account has already been activated.
		echo '<div class="statusmsg">The url is either invalid or you already have activated your account. <a href="registration/login.php" target="_top"> Click here </a> to login</div>';
	    }
		         
	}else{
	    // Invalid approach
	    echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
	}
             
    ?>
        <!-- stop PHP Code -->
          
    </div>
    <!-- end wrap div --> 



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
