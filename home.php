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
	<title>10th International Mathematics, Education and Society(MES10) Conference</title>
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
	#home-active {	
	    color: black !important;
	    background-color: white  !important;
	}
</style>



<!------------------------------------heading----------------------------------------->
	<div id="heading-placeholder">

	<?php
		//$include_path = "/var/www/html/mes";		
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




<section class="article-content clearfix" itemprop="articleBody">
		 
<p style="text-align: justify;font-size:12pt;">The tenth International Mathematics Education and Society conference (MES10) will take place in Hyderabad, India. The concerns of Mathematics Education and Society are of particular importance to countries like India which have a multitude of hierarchies and diversities. India is at once an ancient civilization with a rich history of mathematics and a postcolonial state struggling to reestablish itself in the terms set by colonizer and now the globalizing west.  It has a vast linguistic diversity, several religions, many castes and tribes, and a huge cultural, regional and economic diversity all of which privilege some and marginalize large sections of the learners in complex ways. Given this, there is an urgent need to acknowledge and enquire into the socio-political, historical, cultural, and ethical dimensions of mathematics education in the Indian context. It is hoped that MES10 will spark such an engagement not just in India but in other countries in Asia and abroad which do not have a strong tradition of such an engagement.</p>

<h2><p style="text-align: center;"><a href="http://www.mescommunity.info/" style="text-decoration:none;" target="_blank"><strong><span style="font-size: 17pt;color:#008080;">Mathematics Education and Society</span></strong></a></p></h2>

<p style="text-align: justify;font-size:12pt;">Mathematics Education and Society conferences aim at bringing together mathematics educators from around the world to provide such a forum, as well as to offer a platform on which to build future collaborative activity. It is expected that topics discussed will be wide-ranging. It is also expected that all issues will have a clear underpinning in social/political/cultural/ethical themes. The general topics of the conference are:</p>

<ul id = "topics-list" style="text-align: justify;font-size:12pt;line-height:0.8;">

<li>Politics of Mathematics Education</li><br />
<li>Cultural and Social Aspects of Teaching and Learning Mathematics</li><br />
<li>Sociology of Mathematics and Mathematics Education</li><br />
<li>Alternative Research Methodologies in Mathematics Education</li><br />
<li>Histories and Philosophies in Mathematics Education</li><br />

</ul>

<p style="text-align: justify;font-size:12pt;">The MES community was formed in the year 1998 when the first conference was held in Nottingham, UK. Ever since the community has been expanding, bringing in mathematics educators interested engaging with the socio-cultural, ethical and political issues from across the world.  There have been so far 9 MES conferences held in different parts of the world: Nottingham (UK, 1998), Montechoro (Portugal, 2000), Helsing&oslash;r (Denmark, 2002), Gold Coast (Australia, 2004), Albufeira (Portugal, 2008), Berlin (Germany, 2010), and Cape Town, South Africa (2012),  Portland (USA, 2015), Volos (Greece, 2017)</p>

<p style="text-align: justify;font-size:12pt;">Proceedings of the previous MES conferences are available at <a href="http://www.mescommunity.info/" target="_blank" style="color:blue;">Mathematics Education & Society Community.</a></p>


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
