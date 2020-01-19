<!DOCTYPE html>
<?php
	// STARTING SESSION
	session_start();
	$error = '';
	/*ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);*/

	
	include('config.php');
?>
<html lang = "en-gb" dir = "ltr">

<head>
	<title>Instructions to Register</title>
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

	<script>
	/*function blinktext() {
	  var f = document.getElementById('announcement');
	  setInterval(function() {
	    f.style.visibility = (f.style.visibility == 'hidden' ? '' : 'hidden');
	  }, 300);
	}*/
	</script>

	<style>
	/*#blink_text
	{
	 /*font-size:16px;
	 animation: blink 1s infinite;	
	}
	@keyframes blink 
	{  
	 0% { opacity: 1.0; }
	 50% { opacity: 0.0; }
	 100% { opacity: 1.0; }
	}
	*/
	
	</style>
</head>

<!--<body onload="blinktext();">-->
<body>


<!------------ACTIVE TAB STYLE-------------------->
<style>
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



	<br>

	<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Important Deadlines<br /></span></strong></h4>
		<ul style = "list-style-type:none;">
			<li>Early bird Registration closes on the 15th November, 2018</li>
			<li>Normal Registration from 16th November 2018 to 15th January, 2019</li>
			<li>Delayed Registration (on line) from 16th January, 2019 to 25th January, 2019</li>
			<li>Delayed Registration (on site, only in Indian currency) from 28th January, 2019</li>

		</ul>
		<strong>We follow the Indian Standard Time (IST) for deciding date and time, and so countries
to the west of India will have to make their payments hours or even a day in advance by
their clock/calendar, so as not to miss the deadlines for payments.</strong>
		<br>
	<br>
	
	<span style="color:red;"><strong>If you make a donation or pay the registration fee (or both) please remember to send a copy of the the bank transfer receipt by email to </strong><a href = "mailto:mes10.secretariat@gmail.com">mes10.secretariat@gmail.com</a>. This helps us know for sure who made the payment.</span>
	<br>
	<br>
	<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Donation<br /></span></strong></h4>
<p></p>MES strives to be as inclusive as possible. However, some scholars from across the countries
find it difficult to participate in the conference for want of financial support. Traditionally,
the inclusive practice in MES includes donations from well-equipped participants and
supporters in order to support scholars who could not afford to join the conference without
financial support. If you want to make a difference, please use the donation option when you register
for the conference. </p>

		    <p><b>Note:</b> 50 US Dollar is approximately 3570 Rupees (INR) and
                50 Euro is approximately 4000 Rupees (INR) <br>
            </p>  
    <br>    
	<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Registration Fee<br /></span></strong></h4>
		<p>MES10 charges participants a differentiated registration fee based on whether the participant <strong>presently works</strong> in a High-Income Country (HIC), or Middle-Income Country (MIC) or Low-Income Country (LIC). Please <a href="registration/countries_and_HDI.php" target="_blank"> click here </a> to get the classification of countries into HIC, MIC and LIC that we will follow.</p>
		
		<p>The registration fee includes the following: </p>
		<ol>	 
			<li>Conference Registration</li>
			<li>Meals: Lunch (5) from 29th January to 2nd February; Normal Dinner (2), Reception Dinner (1), Conference Dinner (1), Coffee and snacks twice a day.  It does not include dinner on the day of free evening or alcoholic beverages on any day. </li>
			<li>The Conference Kit: Conference material  including the Conference Proceedings (Only a Soft Copy in USB Flash Drive will be provided. No printed copy will be provided. Printing facility will be available at the conference site where you could get a few printouts for payment). </li> 

		</ol>		
		<p>Please note that <strong>all bank transaction charges are to be paid by you</strong>. If you have not done so, you will be expected to pay the difference (in Indian rupee) at the time of registration.</p>

		<p><strong>Please note that every participant has to register and pay the registration fee individually. We do not accept group or combined payments for participants.</strong></p>
	
		<p>The table gives the registration fee in Indian Rupees (INR).  All payments to be done in Indian Rupees only.</p><br>

		<table align = "center" style = "width:50%;">
			<tr>
				<th>&nbsp;</th>
				<th style = "background-color:#bdd7ee;">Early bird<br>(INR)</th>
				<th style = "background-color:#bdd7ee;">Normal<br>(INR)</th>
				<th style = "background-color:#bdd7ee;">Delayed<br>(INR)&#8224;</th>
			</tr>
			<tr>
				<td style = "background-color:#bdd7ee;">HIC</td>
				<td>19200</td>
				<td>24000</td>
				<td>27200</td>
			</tr>
			<tr>
				<td style = "background-color:#bdd7ee;">MIC</td>
				<td>14400</td>
				<td>18400</td>
				<td>21600</td>
			</tr>
			<tr>
				<td style = "background-color:#bdd7ee;">LIC</td>
				<td>4000</td>
				<td>6000</td>
				<td>8000</td>
			</tr>
			<tr>
				<td style = "background-color:#bdd7ee;">Reduced</td>
				<td>2000</td>
				<td>3200</td>
				<td>4000</td>
			</tr>
		</table>

		<br><p>The following table gives a rough equivalent in Euros for your reference (Using the conversion rate 1 Euro = INR80. But as you know this keeps changing every day.)</p> <br>

		<table align = "center" style = "width:50%;">
			<tr>
				<th>&nbsp;</th>
				<th style = "background-color:#bdd7ee;">Early bird</th>
				<th style = "background-color:#bdd7ee;">Normal</th>
				<th style = "background-color:#bdd7ee;">Delayed&#8224;</th>
			</tr>
			<tr>
				<td style = "background-color:#bdd7ee;">HIC</td>
				<td>240 €</td>
				<td>300 €</td>
				<td>340 €</td>
			</tr>
			<tr>
				<td style = "background-color:#bdd7ee;">MIC</td>
				<td>180 €</td>
				<td>230 €</td>
				<td>270 €</td>
			</tr>
			<tr>
				<td style = "background-color:#bdd7ee;">LIC</td>
				<td>50 €</td>
				<td>75 €</td>
				<td>100 €</td>
			</tr>
			<tr>
				<td style = "background-color:#bdd7ee;">Reduced*</td>
				<td>25 €</td>
				<td>40 €</td>
				<td>50 €</td>
			</tr>
		</table>

		<br><br><p>If you would like meal coupons for accompanying persons, you need to indicate in the registration form how many coupons of each kind you need. <br> </p>
		<ul style = "list-style-type:none;">
			<li>Each lunch costs INR150; Each normal dinner costs INR 250</li>
			<li>Reception INR 350 and Conference dinner costs INR 750;</li>

		</ul>
		<hr>
		<p><b>&#8224;</b> Delayed registration fee can also be paid on site, but we suggest that you avail the opportunity to pay online as, we only accept Indian Currency if paid on site.</p>

		<br><p><b>*</b> Reduced fee is applicable for AUTHORS who come from Low Income Countries and who do not have a position that makes conference participation funding possible. We have the following categories in mind, but there could be others.<ol type = "1">
			<li> Doctoral students (i.e., those who are working towards a PhD)</li>
			<li>People working in self- funded or poorly funded NGOs</li>
			<li>Part-time or visiting faculty members in colleges and universities (who do not receive full pay as faculty members)</li>
			<li> School teachers</li>
		</ol></p>

		<p>In all such cases you will need to submit a letter from your institution identifying what your position is and stating that people in your position do not have access to funding for conference participation.</p>
		<hr>

		<p><strong>Important Notification:</strong> Please note that the <b>letter for getting your VISA</b> will be issued only
		after the registration fee is paid. And it may take more time to get Indian VISA. So, please
		register as early as you can. Some countries have the facility of getting e VISA to India.
		Please check online sites such as <a href="https://indianvisaonline.gov.in/evisa/tvoa.html" target="_blank"> https://indianvisaonline.gov.in/evisa/tvoa.html</a></p><br>
		<p><strong>Financial Support:</strong> In addition to the differentiated fee, we hope to be able to find some money by way of donation to support a few authors who do not have adequate support. You could apply for this and depending on the availability of funds we will try and provide you partial support.More information on how to apply for financial support will be added to this website by 30th September.</p><br>


		
		<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;"> Payment Procedures <br /></span></strong></h4>
		<p> Each participant should firstly create an account by registering in the website through the <a href="registration/signUp.php" target="_top"> Log in / Sign in </a> section. After creating your account, you will immediately receive an e-mail at your e-mail address. Please follow the instructions in order to activate the account. After that you can Log in through the conference website and the payment details will be provided there.</p>
		<p>	Once the payment is made, we request each participant to kindly <span style="color:red;"><strong>send the copy of the <b>bank transfer receipt</b> by email to <strong><a href = "mailto:mes10.secretariat@gmail.com">mes10.secretariat@gmail.com</a></span>. This helps us know for sure who made the payment. Please note that only after receiving the receipt, letter for getting your VISA will be issued.
		</p>
		<br>

		<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Cancellation Policy<br /></span></strong></h4>
	
		<p>We follow India Standard Time (IST). So, cancel early enough so that you don’t lose money because of time difference.</p>

		<ul style = "list-style-type:none">

			<li>Full refund till 30th November, 2018</li>
			<li>Partial refund, after deducting INR 2000/- per person (towards administrative charges), from 1st December till 31st December, 2018</li>

<li>No refund after 31st December, 2018.</li>

		</ul>

		<br><br>

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
