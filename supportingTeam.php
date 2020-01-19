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
	<title>Supporting Team</title>
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

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	html {
	  box-sizing: border-box;
	}

	*, *:before, *:after {
	  box-sizing: inherit;
	}

	.column_mtt {
	  float: left;
	  width: 30.3%;
	  margin-bottom: 16px;
	  padding: 0 8px;
	}

	@media screen and (max-width: 650px) {
	  .column_mtt {
	    width: 100%;
	    display: block;
	  }
	}
	
	.card {
	  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	  //border: 1px;
	}

	.container_mtt {
	  padding: 0 16px;
	}

	.container_mtt::after, .row_mtt::after {
	  content: "";
	  clear: both;
	  display: table;
	}

	.title_mtt {
	  color: grey;
	}

	.button_mtt {
	  border: none;
	  outline: 0;
	  display: inline-block;
	  padding: 8px;
	  color: white;
	  background-color: #000;
	  text-align: center;
	  cursor: pointer;
	  width: 100%;
	}

	.button_mtt:hover {
	  background-color: #555;
	}
	
	</style>
</head>

<body>

<!------------ACTIVE TAB STYLE-------------------->
<style>
	#team-active {	
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
		<h2><strong style="font-size: 22px; color:teal;">Website Development Team</strong></h2>
		<span style="left:27px;font-size: 12pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial;"><p>Meet the Technical team that has developed the website.</p>
		<p>The team comprises of UOH Integrated M.Tech students.</p></span>
		<br>

		<!----- Website Development Team----->
		<div class="row_mtt">
		  <div class="column_mtt">
		    <div class="card">
		      <img src="media/avatars/shashankphoto.jpg" alt="Shashank" style="width:100%">
		      <div class="container_mtt">
			<h4>Sai Shashank Bandela</h4>
			<p class="title_mtt"></p>
			<!--p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
			<!--<p>anihtars@gmail.com</p>-->
			<!--<p><button class="button_mtt">Contact</button></p>-->
		      </div>
		    </div>
		  </div>

		  <div class="column_mtt">
		    <div class="card">
		      <!--<img src="media/avatars/IMG_20160508_145023.jpg" alt="Soubhagya" style="width:100%;">-->
			<img class ="proPic" src="media/avatars/sou2.jpg" alt="Soubhagya" style="width:100%;">
		      <div class="container_mtt">
			<h4>Soubhagya Akkena</h4>
			<p class="title_mtt"></p>
			<!--p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
			<!--<p>soubhagyaakkena@gmail.com</p>-->
			<!--<p><button class="button_mtt">Contact</button></p>-->
		      </div>
		    </div>
		  </div>
		  <div class="column_mtt">
		    <div class="card">
		      <img src="media/avatars/lavanyaPhoto.jpeg" alt="Lavanya" style="width:100%">
		      <div class="container_mtt">
			<h4>Lavanya Vaddavalli</h4>
			<p class="title_mtt"></p>
			<!--p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
			<!--<p>lavana29vaddavalli@mail.com</p>-->
			<!--<p><button class="button_mtt">Contact</button></p>-->
		      </div>
		    </div>
		  </div>
		</div>
		
		<!---- Website Accessibility Team ---->
		<h2><strong style="font-size: 22px; color:teal;">Website Accessibility Team</strong></h2>
		 <div class="row_mtt">
		  <div class="column_mtt">
		    <div class="card">
		      <div class="container_mtt">
			<h4>Mr. Sandeep Pr</h4>
			<p class="title_mtt">Access Deeds</p>
			<!--p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
			<!--<p><button class="button_mtt">Contact</button></p>-->
		      </div>
		    </div>
		  </div>

		  <div class="column_mtt">
		    <div class="card">
		      <div class="container_mtt">
			<h4>Ms. Sree Lakshmi</h4>
			<p class="title_mtt">Access Deeds</p>
			<!--p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
			<!--<p><button class="button_mtt">Contact</button></p>-->
		      </div>
		    </div>
		  </div>
		</div>
	
		<!---- Poster Designers---->
		<h2><strong style="font-size: 22px; color:teal;">Poster Designers</strong></h2>	
		 <div class="row_mtt">
		  <div class="column_mtt" style>
		    <div class="card">
		        <img id="junaid" src="media/avatars/Poster designer Md Junaid Siddique.jpg" alt="Md Junaid" style="width:100%">
		      <div class="container_mtt">
			<h4>Md Junaid Siddique</h4>
			<p class="title_mtt"> </p>
			<p class="title_mtt">B.Tech in Computer Science Engineering, Aliah University, West Bengal</p>
			<!--<p>anihtars@gmail.com</p>-->
			<!--<p><button class="button_mtt">Contact</button></p>-->
		      </div>
		    </div>
		  </div>

		  <div class="column_mtt">
		    <div class="card">
		        <img src="media/avatars/
Poster designer Murchana Roychoudhury2new.jpg" alt="Murchana" style="width:100%">
		      <div class="container_mtt">
			<h4>Ms. Murchana Roychoudhury</h4>
			<p class="title_mtt"></p>
			<p class="title_mtt">The Graduate Institute of International and Development Studies,  Geneva, Switzerland.</p>
			<!--<p>soubhagyaakkena@gmail.com</p>-->
			<!--<p><button class="button_mtt">Contact</button></p>-->
		      </div>
		    </div>
		  </div>
		</div>
		
		<!--<h2><strong style="font-size: 22px; color:teal;">Poster Designers</strong></h2>	
		<ul  class="no-decoration card">	
		<li style="padding:6px;"><span style="left:27px;font-size: 12pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial;">Md Junaid Siddique ,   3rd year B.Tech in Computer Science Engineering, Aliah University, New Town, Kolkata, West Bengal</span></li>
  		<li style="padding:6px;"><span style="left:27px;font-size: 12pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial;">Ms. Murchana Roychoudhury,  The Graduate Institute of International and Development Studies,  Geneva, Switzerland.</span></li>
		</ul>-->
		</div>

	<!------------------------end of page main content------------------------------->



	<!------------------------------------sidebar-----------------------------------
		<div class="col-md-4">
			<div class="row">
				<div id="sidebar-dates-placeholder">
				
				<?php	
					/*include("$include_path/components/sidebar-dates.php");*/
				?>

				</div>
			</div>

			<div class="row">
		
			<?php	/*
				include("$include_path/components/poster.php");*/
			?>

			</div>
			<div class="row">
				<div id="sidebar-photos-placeholder">
				<?php/*	
					include("$include_path/components/sidebar-photos.php");*/
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
