<!DOCTYPE html>

<html lang = "en-gb" dir = "ltr">

<head>
	<title>Submission</title>
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
	#submission-active {	
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

<h2 aria-label="Paper Submission Deadline : 15th May, 2018. Striked off. 31st May, 2018, Striked off. Active Date is 15th June, 2018"><strong><span style="font-size:17pt;text-align:center;color:#008080;"> Paper Submission Deadline : </span></strong> <span class="normal-font"><strike>15th May, 2018. </strike> <strike>31st May, 2018. </strike> <font color="FF0000"> <b> 15th June, 2018</b></font>.</span></h2>

<br />
<p style="text-align: justify;font-size:12pt;">
All paper submissions are done through EasyChair. 
<br />	
Participants are requested to follow the link given below for the submission of papers.
<br />
<a href="https://easychair.org/cfp/MES10" target="_blank" aria-label="To Submit Papers, Click here">Click here</a>
</p>

<h2><strong><span style="font-size:17pt;text-align:center;color:#008080;">  Instructions to the Authors<br /></strong></span></h2>
<p style="text-align: justify;font-size:12pt;">
The authors must use the template provided by the conference for the submission of papers.
<br />
<a href="media/submission/MES10 PROCEEDINGS STYLE TEMPLATE.docx" download>Click here to download the Paper Template</a>
</p>

<h2 class="no-margin"><strong><span style="font-size:17pt;text-align:center;color:#008080;">  Language Support for Submissions<br /></strong></span></h2>

	<p style="text-align: justify;font-size:12pt;">The conference recognises that MES participants teach, research and write in diverse language contexts. We are thus offering the following options: <br />
<ul style="text-align: justify;font-size:12pt;">
  <li>When making a conference submission, a participant writing in English as a second/additional language and submitting by the <strong>15th June, 2018</strong> deadline may request writing feedback on the the submission prior to review. We encourage author(s) to indicate specific aspects of the writing they would like feedback on, for example, clarity of meaning, grammar etc. Two experienced MES researchers assigned to the paper will then be in contact with the author(s) about the feedback. The deadline for final submission for review is <strong>15th July, 2018.</strong></li>
  <li>When making a conference submission, a participant may choose to provide, in addition to an abstract written in English, an abstract in a language that is suitable for their context. In such a case, the full paper in English should still meet the stated length requirements.   </li>
  <li>In addition, when making a conference submission a participant may request additional length for the submission. This request should indicate how the extra length is used to address language differences as it relates to research transcripts and texts, and/or the research writing process itself. </li>
</ul> 


<p><strong><span style="font-size:17pt;text-align:center;color:#008080;"> </br> More Details Coming Soon<br /></strong></span></p> 

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
