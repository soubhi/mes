<!DOCTYPE html>

<html lang = "en-gb" dir = "ltr">

<head>
	<title>Places to Visit</title>
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
	#placesToVisit-active {	
	    color: black !important;
	    background-color: white  !important;
	}

	ul.otherPlaces,
	.otherPlaces li {
	padding: 0;
	margin: 0;
	list-style: none;
	}

	ul.otherPlaces {
	margin: 2em 0;
	}

	.otherPlaces li {
	margin: 1em;
	margin-left: 3em;
	}
	.otherPlaces li:before {
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

<!--	
<div class="row">
	<h2>Places to visit around Hyderabad </h2>
</div>
-->
<br />
<div class="row">
	<div class="col-sm-3 col-xs-12 col-md-4 col-lg-3"> 
		<img style="margin: 10px; float: left;" src="media/placesToVisit/269378_beautiful_pic_TdodC.jpg" alt="Charminar" width="100%" />
	</div>
	<div class="col-sm-9 col-xs-12 col-md-8 col-lg-9 ">
		<h2 class="no-margin"><strong style="font-size: 22px; color:teal;"> Charminar</strong></h2>
		<p style= "text-align justify;">Charminar is the global icon of Hyderabad. Many local festivals are celebrated in Charminar area like Ramzaan. It was constructed in 1591 by Sultan Muhammad Quli Qutb Shah, the fifth ruler of the Qutub Shahi dynasty.</p>
		<a href="http://www.telanganatourism.gov.in/partials/destinations/heritage-spots/hyderabad/charminar.html" aria-label="Know More About Charminar, Visit Website" target="_blank">Visit Website</a> 
		<!--		
		<a href="https://www.tripadvisor.in/Attraction_Review-g297586-d320668-Reviews-Charminar-Hyderabad_Hyderabad_District_Telangana.html" target="_blank">&nbsp;&nbsp;Trip Adviser</a> 
		-->
	</div>
</div>

<br />
<br />
<div class="row">
	<div class="col-sm-3 col-xs-12 col-md-4 col-lg-3"> 
		<img style="margin: 10px; float: left;" src="media/placesToVisit/makkah_masjid_hydera_lRGmT.jpg" alt="Mecca Masjid" width="100%" />
	</div>
	<div class="col-sm-9 col-xs-12 col-md-8 col-lg-9 ">
		<h2 class="no-margin"><strong style="font-size: 22px; color:teal;"> Mecca Masjid</strong></h2>
		<p style= "text-align justify;">Mecca Masjid, is one of the oldest mosques in Hyderabad, and it is one of the largest masajids in India. Makkah Masjid is a listed heritage building in the old city of Hyderabad.</p>
		<a href="http://www.telanganatourism.gov.in/partials/destinations/heritage-spots/hyderabad/mecca-masjid.html#parentHorizontalTab7" aria-label="Know More About Mecca Masjid, Visit Website" target="_blank">Visit Website</a> 
	</div>
</div>

<br />
<br />
<div class="row">
	<div class="col-sm-3 col-xs-12 col-md-4 col-lg-3"> 
		<img style="margin: 10px; float: left;" src="media/placesToVisit/chowmahalla_palace_0_3wdxa.jpg" alt="Chowmahalla Palace" width="100%" />
	</div>
	<div class="col-sm-9 col-xs-12 col-md-8 col-lg-9 ">
		<h2 class="no-margin"><strong style="font-size: 22px; color:teal;"> <span style="font-size:17pt;text-align:center;color:#008080;"> Chowmahalla Palace </span></strong> </h2>
		<p style= "text-align justify;">Chowmahalla Palace (4 Palaces), is a palace of the Nizams of Hyderabad state. It was the seat of the Asaf Jahi dynasty and was the official residence of the Nizams of Hyderabad while they ruled their state.</p>
		<a href="http://www.telanganatourism.gov.in/partials/destinations/heritage-spots/hyderabad/chowmahalla-palace.html" aria-label="Know More About Chowmahalla Palace, Visit Website" target="_blank">Visit Website</a> 
	</div>
</div>

<br />
<br />
<div class="row">
	<div class="col-sm-3 col-xs-12 col-md-4 col-lg-3"> 
		<img style="margin: 10px; float: left;" src="media/placesToVisit/golconda_fort.jpg" alt="Golconda Fort" width="100%" />
	</div>
	<div class="col-sm-9 col-xs-12 col-md-8 col-lg-9 ">
		<h2 class="no-margin"><strong style="font-size: 22px; color:teal;"> <span style="font-size:17pt;text-align:center;color:#008080;"> Golconda Fort </span></strong> </h2>
		<p style= "text-align justify;">Golconda is a citadel and fort in Southern India and was the capital of the medieval sultanate of the Qutb Shahi dynasty (c.1518–1687). It known for the mines that have produced some of the world's most famous gems, including the Koh-i-Noor, the Hope Diamond, Nassak Diamond and the Noor-ul-Ain.</p>
		<a href="http://www.telanganatourism.gov.in/partials/destinations/heritage-spots/hyderabad/golconda-fort.html" aria-label="Know More About Golconda Fort, Visit Website" target="_blank">Visit Website</a> 
	</div>
</div>

<br />
<br />
<div class="row">
	<div class="col-sm-3 col-xs-12 col-md-4 col-lg-3"> 
		<img style="margin: 10px; float: left;" src="media/placesToVisit/qutub_shahi_tomb4.jpg" alt="Qutub Shahi Tombs" width="100%" />
	</div>
	<div class="col-sm-9 col-xs-12 col-md-8 col-lg-9 ">
		<h2 class="no-margin"><strong style="font-size: 22px; color:teal;"> <span style="font-size:17pt;text-align:center;color:#008080;"> Qutub Shahi Tombs </span></strong> </h2>
		<p style= "text-align justify;">The Qutub Shahi Tombs are an architectural marvel amid the picturesque gardens of Ibrahim Bagh in Hyderabad. Qutub Shahi Tombs are built to Persian, Hindu and Pathani styles of architecture.</p>
		<a href="http://www.hyderabadtourism.travel/qutub-shahi-tombs-hyderabad" target="_blank" aria-label="Know More About Qutub Shahi Tombs, Visit Website" >Visit Website</a> 
	</div>
</div>

<br />
<br />
<div class="row">
	<div class="col-sm-3 col-xs-12 col-md-4 col-lg-3"> 
		<img style="margin: 10px; float: left;" src="media/placesToVisit/salar_jung_museum_71_OtyVb.jpg" alt="Salar Jung Museum" width="100%" />
	</div>
	<div class="col-sm-9 col-xs-12 col-md-8 col-lg-9 ">
		<h2 class="no-margin"><strong style="font-size: 22px; color:teal;"> <span style="font-size:17pt;text-align:center;color:#008080;"> Salar Jung Museum </span></strong> </h2>
		<p style= "text-align justify;">The Salar Jung Museum is an art museum located at Darushifa, on the southern bank of the Musi River. The museum's collection was sourced from the property of the Salar Jung family. It is one of the largest museums in the world.</p>
		<a href="http://salarjungmuseum.in/home.php" target="_blank" aria-label="Know More About Salar Jung Museum, Visit Website" >Visit Website</a> 
	</div>
</div>

<br />
<br />
<div class="row">
	<div class="col-sm-3 col-xs-12 col-md-4 col-lg-3"> 
		<img style="margin: 10px; float: left;" src="media/placesToVisit/shilparamam.jpg" alt="Shilparamam" width="100%" />
	</div>
	<div class="col-sm-9 col-xs-12 col-md-8 col-lg-9 ">
		<h2 class="no-margin"><strong style="font-size: 22px; color:teal;"> <span style="font-size:17pt;text-align:center;color:#008080;"> Shilparamam </span></strong> </h2>
		<p style= "text-align justify;">Shilparamam is an arts and crafts village. It gives a scenic ambience of tradition and cultural heritage. It is a tribute to the cultural legacy of India.</p>
		<a href="https://www.shilparamam.in/" target="_blank" aria-label="Know More About Shilparamam, Visit Website" >Visit Website</a> 
	</div>
</div>
<br />
<br />

<div class="row">
	<p> 
A bit farther places include <br />
<ul class="otherPlaces">
<li>Pochampally village (40 kms from Hyderabad) - <a href="http://www.telanganatourism.gov.in/partials/about/arts-crafts/pochampally-handlooms.html" target="_blank">Visit Website</a> </li>
<li>Bidar (140 kms from Hyderabad) - <a href="https://bidartourism.com/" target="_blank">Visit Website</a></li>
<li>Hampi - <a href="https://kstdc.co/tour-packages/hampi-sightseeing/" target="_blank">Visit Website</a></li>
<li>Ananthagiri Hills - <a href="http://www.telanganatourism.gov.in/partials/destinations/nature-discovery/vikarabad/ananthagiri-hills.html" target="_blank">Visit Website</a></li>
</ul>
<!--
Bhongir Fort, Rachakonda fort, Belum Caves 
-->
</p>
</div>
<br />
<br />


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
