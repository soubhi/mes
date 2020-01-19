<!DOCTYPE html>
<?php
	// STARTING SESSION
	session_start();
	if ($_SESSION['logged_in'] != TRUE) {
		header("location: login.php");
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
	<title>MES10 | Payment Procedure</title>
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
/*
	#registration-active {	
	    color: black !important;
	    background-color: white  !important;
	}
	#register-active {	
	    color: white !important;
	    background-color: teal  !important;
	}
	#registration-caret-active {
	    border-top-color: black !important;
	    border-bottom-color: black !important;
	}
*/
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		text-align:center;
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







<div class="container">
	<div class="row">

	<!--------------------------------page main content------------------------------->
		<div class="col-md-8">
		<!--<div><a href="registration/usr_home.php" target="_top"> <br><< Back </b></a></div>
		<br>-->	

		<br>
		<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">MES10 Payment Procedure<br /></span></strong></h4>
		<br>
		<p>MES10 accepts payments through bank transfer.</p>

		<ul type = "1">
			<li>Donation and Registration fee will be payable in <strong>Indian Rupees (INR)</strong> only.</li>
			<li> Please note that the total sum of payments which appear in the registration form (fees for Registration, accompanying persons, dinner activities) should coincide with the amount of Rupees (INR) written on the receipt of payment.<strong> All bank charges for transferring money should be paid by the participant.</strong></li>
			<li>We will follow the <strong>Indian Standard Time (IST)</strong> for payment of registration fee. For those from countries to the west of India, it is important to remember that your day starts later than ours. For example, when it is 15th November for you, it may be already 16th November in India and you may have missed the chance to avail the early bird option.  Please ensure that you make payments sufficiently early so that you do not miss out on benefits because of time difference.</li>
		    <li>We urge each participant to kindly <span style="color:red;"><strong>send the copy of the <b>bank transfer receipt</b> by email to </strong><a href = "mailto:mes10.secretariat@gmail.com">mes10.secretariat@gmail.com</a></span>. This helps us know for sure who made the payment. Please note that only after receiving the receipt, letter for getting your VISA will be issued.</li>
			<li>We have difficulty keeping track of whose money has been credited to the account because the receipts and the account have nothing in common for many.<span style="color:red;"><strong> Kindly insist that the banker should include your name in the sender, receiver information.</strong></span></li>
		    <li>For transferring money, some people have used the following wire transfer services and it worked for them.</li>
		    <ol type = "i">
		        <li>&nbsp;Transferwise (<a href = "https://transferwise.com/in/">https//transferwise.com</a>)</li>
		        <li>&nbsp;Transfergo (<a href = "https://www.transfergo.com/en">https://www.transfergo.com</a>)</li>
		        <li>&nbsp;Remitly.com (<a href = "https://www.remitly.com/us/en/india">http://remitly.com/</a>)</li>
		    </ol>
		</ul>
		
		<!--
		<p>Apart from the on-line registration form, each participant should also send the copy of the bank transfer receipt by email to <a href = "mailto:mes10.secretariat@gmail.com">mes10.secretariat@gmail.com</a>.Any form received without the payment receipt cannot be processed.</p>
		<p>Each participant should send the copy of the bank transfer receipt by email to <a href = "mailto:mes10.secretariat@gmail.com">mes10.secretariat@gmail.com</a>. Any form received without the payment receipt cannot be processed.</p><br>
		-->   
		    
		<br><p><b>Bank Account details:</b></p>

		<ul style = "list-style-type:none">

			<li>Name of the bank: STATE BANK OF INDIA</li><br>

			<li>Account Holder: Mathematics Education and Society Conference</li><br>

			<li>Bank Address: Raoof Mansion, Plot no 7&8 Dwaraka Nagar, Bandlaguda Jagir, Rajendra Nagar, Hyderabad 500008, Telangana, India</li><br>
			
			<li>Account Holder’s address: B 501, Vasathi Anandhi, Peeramcheruv, Bandlaguda, Hyderabad,
Ranga Reddy district, 500086, Telangana, India</li><br>
			<li>Account Number: 37741797860</li><br>

			<li>(If you need a 17-digit Account number, use 00000037741797860)</li><br>

			<li>SWIFT Code/Routing Number: SBININBB315</li><br>

			<li>IFSC Code:  SBIN0017236 (Only for Indian Participants)</li><br>

			<li>Branch Code: 17236</li><br>
			
			<li>Email address linked to the account: <a href = "mailto:mes10.hyderabad@gmail.com">mes10.hyderabad@gmail.com</a></li><br>
			
			<li>Use anyone of the following Purpose codes :</li>
			
			<li>Purpose Code: P1008, Description: Research &amp; Development services </li>
			<!--<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (OR)</li>-->
			<li>Purpose Code: P1590, Description: Receipts below $10,000 (say Rs 5,00,000)</li> <br>

		</ul>
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
