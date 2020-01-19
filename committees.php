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
	<title>Committees</title>
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
	#committees-active {	
	    color: black !important;
	    background-color: white  !important;
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

<section class="article-content clearfix" itemprop="articleBody">

<h2><strong><span style="font-size:17pt;text-align:justify;color:#008080;">International Advisory Committee</span></strong></h2>
<p style ="font-size:12pt;">
	<ul class="no-decoration">
		<li>Yasmine Abtahi, University of Ottawa, Canada</li>
		<li>Jehas Alshwaikh, Birzeit University, Palestine</li>
		<li>Anna Chronaki, University of Thessaly, Greece</li>
		<li>Tony Cotton, Independent Scholar, UK</li>
		<li>Lisa Darragh, University of Auckland, New Zealand </li>
		<li>Peter Gates, University of Nottingham, UK</li>
		<li>Maisie Gholson, University of Michigan, USA</li>
		<li>Brian Greer, University of Portland, USA</li>
		<li>Beth Herbel-Eisenmann, Michigan State University, USA</li>
		<li>Eva Jablonka, King's College London, UK</li>
		<li>David Kollosche, Potsdam University, Germany</li>
		<li>Gregory Larnell, University of Illinios, USA</li>
		<li>Renato Marcone,  Federal University of Sa&#771;o Paulo,Brazil</li>
		<li>Swapna Mukhopadyay, Portland State University, USA</li>
		<li>Nirmala Naresh, Miami University, USA</li>
		<li>Alexandre Pais, Manchester Metropolitan University, UK</li>
		<li>Anita Rampal, Delhi University, India</li>
		<li>Milton Rosa, Federal University of Ouro Preto, Brazil</li>
		<li>Kate Le Roux, University of Cape Town, South Africa</li>
		<li>Jayasree Subramanian, Independent Researcher, India</li>
		<li>Dalene Swanson, University of Stirling, UK</li>
		<li>Wee Tiong Seah, Melbourne Graduate School of Education, Australia</li>
		<li>Luz Valoyes Chavez, University of Chile, Chile</li>
		<li>David Wagner, University of Brunswick, Canada</li>
		<li>Peter Wright, University of London, UK</li>
	</ul>
</p>

<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Steering Committee</strong></span></h4>
<p style ="font-size:12pt;">
	<ul class="no-decoration">
		<li>Jayasree Subramanian, Independent Researcher, Hyderabad (Chair of the committee)</li>
		<li>Farida Abdulla Khan, Jamia Millia Islamia, Delhi</li>
		<li>Senthil Babu, French Institute, Pondichery</li>
		<li>Rakhi Banerjee, Azim Premji University, Bangalore</li>
		<li>Amber Habib, Shiv Nadar University, Delhi</li>
		<li>S Najamul Hasan, Maulana Azad National Urdu University, Hyderabad</li>
		<li>K. Subramaniam, Homi Bhabha Centre for Science Education, Mumbai</li>
		<li>Usha Menon, JodoGyan, Delhi</li>
		<li>Fozia Quazi, Islamic University of Science and Technology, Kashmir</li>
		<li>R. Ramanujam, The Institute of Mathematical Sciences, Chennai</li>
		<li>Anita Rampal, Delhi University, Delhi</li>
		<li>Parvin Sinclair, Indira Gandhi National Open University, Delhi</li>
	</ul>
</p>

<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Local Organizing Committee</strong></span></h4>
<p style ="font-size:12pt;">
	<ul class="no-decoration">
		<li>Jayasree Subramanian, Independent Researcher, Hyderabad (Chair of the committee)</li>
		<li>Prajit Basu, University of Hyderabad, Hyderabad (Co-chair of the committee)</li>
		<li>Rajat Tandon, University of Hyderabad, Hyderabad (Advisor)</li>
		<li>B. Sri Padmavathi, University of Hyderabad, Hyderabad</li>
		<li>S Najamul Hasan, Maulana Azad National Urdu University, Hyderabad</li>
		<li>Raghava Reddy Chandri, University of Hyderabad, Hyderabad</li>
		<li>Sharath Ananthamurthy, University of Hyderabad, Hyderabad</li>
	</ul>
</p>

</section>

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
