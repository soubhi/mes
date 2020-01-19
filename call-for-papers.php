<!DOCTYPE html>

<html lang = "en-gb" dir = "ltr">

<head>
	<title>Call for Papers</title>
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
	#papers-active {	
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

<section class="article-content clearfix" itemprop="articleBody">
		<h2><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Call for Papers<br /></strong></span></h2>
<p style ="font-size:12pt; text-align:justify;">Mathematics Education and Society (MES) conferences arose out of a felt need for a wider discussion of the social, ethical, and political dimensions of mathematics education, for disseminating theoretical frameworks, discussing methodological issues, sharing and discussing research, and planning for action and the development of a strong research network on mathematics education and society. In addition, MES encourages classroom teachers to share their praxis.</p>

<p style ="font-size:12pt; text-align:justify;">Mathematics Education and Society conferences aim at bringing together mathematics educators from around the world to provide such a forum, as well as to offer a platform on which to build future collaborative activity. It is expected that topics discussed will be wide-ranging. It is also expected that all issues will have a clear underpinning in social/political/cultural/ethical themes. The general topics of the conference are: 
<ol>
<li>Politics of Mathematics Education,</li> <li>Cultural and Social Aspects of Teaching and Learning Mathematics,</li> <li>Sociology of Mathematics and Mathematics Education, </li> <li>Alternative Research Methodologies in Mathematics Education, </li> <li>Histories and Philosophies in Mathematics Education.
</ol>
</p>


<p style="text-align: justify;font-size:12pt;"><span style="text-decoration: underline;">Research Papers</span>: Papers could be theoretical papers, empirical research reports or discussion essays addressing themes of relevance to the conference. Length: maximum 10 pages.</p>
<p style="text-align: justify;font-size:12pt;"><span style="text-decoration: underline;">Project presentations</span>: Shorter on-going projects of theoretical, empirical or developmental character are welcomed for discussion during the conference. The project description in written form should address a topic of relevance to the conference. Length: maximum 4 pages.</p>
<p style="text-align: justify;font-size:12pt;"><span style="text-decoration: underline;">Symposia</span>: A symposium proposal should include the aims of the symposium, a rationale for its relevance to the conference and a suggested plan for how the symposium will be conducted. Length: maximum 4 pages.</p>
<p style="text-align: justify;font-size:12pt;"><span style="text-decoration: underline;">Posters</span>: A poster proposal should include the aims of the study, a rationale of its theoretical or empirical character and a rational to the conference theme. It will emphasize the use of appropriate visuals and adequate distribution onto A1 paper size. Length: maximum 4 pages. [note: authors need to submit the 4 pages poster description for review and will need to bring the A1 poster at the conference site <span style="line-height: 115%; font-family: 'Calibri',sans-serif;">by themselves as there will be no possibility to either print or store them</span>].</p>
<p style="text-align: justify;font-size:12pt;">The accepted papers, project presentations, symposia and posters will be published on the MES 10 website prior to the conference  and soft / hard copies of the proceedings will be available at the time of the conference.</p>
<p></p>
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
