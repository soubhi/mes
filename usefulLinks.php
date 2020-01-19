<!DOCTYPE html>

<html lang = "en-gb" dir = "ltr">

<head>
	<title>Useful Links</title>
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
	#more-active {	
	    color: black !important;
	    background-color: white  !important;
	}
	#usefulLinks-active {	
	    color: white !important;
	    background-color: teal !important;
	}
	#more-caret-active {
	    border-top-color: black !important;
	    border-bottom-color: black !important;
	}

	ul.list,
	.list li {
	padding: 0;
	margin: 0;
	list-style: none;
	}

	ul.list {
	margin: 2em 0;
	}

	.list li {
	margin: 1em;
	margin-left: 3em;
	}
	.list li:before {
		content: '\f124';
		font-family: 'FontAwesome';
		float: left;
		margin-left: -1.5em;
		color: #008080;
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

		<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Useful Links<br /></strong></span></h4>
		<div class = "row">
			<ul class="list">
		    <li> <b>e-visa:</b> Some countries have the facility of getting e VISA to India. Please check online sites such as <a href="https://indianvisaonline.gov.in/evisa/tvoa.html" target="_blank"> https://indianvisaonline.gov.in/evisa/tvoa.html</a></li>
    		   <li><b>Telangana Tourism website:</b> If you would be spending a few more days in India, and would like to tour around Hyderabad and, you could look up the Telangana tourism page. You will find several one day tours and other packages which may be of interest to you.  <a href="https://www.telanganatourism.gov.in/" target="_blank">https://www.telanganatourism.gov.in/</a></li>
    		   <li><b> Weather in Hyderabad:</b> Towards the end of January, the temperatures rise. The forecast for January 28 to February 2nd, 2019 is as follows:  Maximum temperature would be around 30° C and the minimum  16°C. For more details, please look up<a href="https://www.accuweather.com/en/in/hyderabad/202190/january-weather/202190?monyr=1/1/2019" target="_blank"> https://www.accuweather.com/en/in/hyderabad/202190/january-weather/202190?monyr=1/1/2019</a></li>
			</ul>
		</div>
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
