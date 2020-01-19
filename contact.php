<!DOCTYPE html>
<?php
	// STARTING SESSION
	session_start();

	$error = '';
	/*ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
*/
	
	include ('config.php');
?>
<html lang = "en-gb" dir = "ltr">

<head>
	<title>Contact</title>
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
	#contact-active {	
	    color: black !important;
	    background-color: white  !important;
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

			<pre><pre><span style="left:27px;font-size: 14pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial;" role="heading" heading-level="2"><strong>Contact Details:</strong></span></pre><p>
<span style="left:27px;font-size: 12pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial;"><strong style="font-size: 12pt;">    Email:</strong>  mes10.hyderabad@gmail.com </span>

<span style="left:27px;font-size: 12pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial;"><strong style="font-size: 12pt;">    Mailing Address:</strong>
<ul class="no-decoration">
<li><span style="left:27px;font-size: 12pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial;">     Dr. Jayasree Subramanian (Chair),
      B 501, Vasathi Anandi, Peeramcheruvu, Bandlaguda Jagir, 
      R R District, Hyderabad,Telangana, 500091.</span>
</li>
<li>
<span style="left:27px;font-size: 12pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial;">     Prof. Prajit K Basu, (Co Chair), Department of Philosophy, 
      University of Hyderabad, Professor C. R. Rao Road, 
      Gachi Bowli, Hyderabad 500 046, India.</span>
</li>
</ul>	  
<!--
<span style="left:27px;font-size: 12pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial;"><strong style="font-size: 12pt;">    Mailing Address:</strong>
     Prof. Prajit Basu,
     Center for Knowledge Culture and Innovation Studies,
     School of Social Sciences,
     University of Hyderabad,
     Hyderabad -500046
     India </p>--></pre>
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
