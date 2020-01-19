<!DOCTYPE html>

<html lang = "en-gb" dir = "ltr">

<head>
	<title>Conference Program</title>
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
	#program-active {	
	    color: black !important;
	    background-color: white  !important;
	}
	#conferenceProgram-active {	
	    color: white !important;
	    background-color: teal  !important;
	}
	#program-caret-active {
	    border-top-color: black !important;
	    border-bottom-color: black !important;
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

		<h2><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Broad Schedule :<br /><br /></strong></span></h2>
	
	<div class="table-responsive">          
  		<table class="table table-bordered">
    	<thead>
      <tr>
        <th>Date</th>
        <th>08:45-10:00</th>
        <th>10:00-10:30</th>
	<th>10:30-12:30</th>
	<th>12:30-14:00</th>
	<th>14:00-16:00</th>
	<th>16:00-16:30</th>
	<th>16:30-18:30</th>
	<th>18:30-20:30</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	<td>28-01-2019</td>
        <td colspan = "4">&nbsp;</td>
        <td>Registration</td>
	<td>&nbsp;</td>
        <td colspan="2">Welcome Inagural Lecture and response Dinner</td>
    </tr>
     <tr>
	<td>29-01-2019</td>
        <td>Plenary Lecture 1 and Responses</td>
	<td>Coffee Break</td>
	<td>Discussion in Working groups and response to Plenary</td>
	<td>Lunch</td>
        <td>Symposia, Paper & Poster  Presentations in Parallel Sessions</td>
	<td>Coffee Break</td>
        <td>Symposia, Paper & Poster  Presentations in Parallel Sessions</td>
	<td>Agora I and Dinner</td>
      </tr>
      <tr>
	<td>30-01-2019</td>
        <td>Plenary Lecture 2 and Responses</td>
	<td>Coffee Break</td>
	<td>Discussion in Working groups and response to Plenary</td>
	<td>Lunch</td>
        <td>Symposia, Paper & Poster  Presentations in Parallel Sessions</td>
	<td>Coffee Break</td>
        <td>Symposia, Paper & Poster  Presentations in Parallel Sessions</td>
	<td>Dinner*</td>
      </tr>
     <tr>
	<td>31-01-2019</td>
        <td>Plenary Lecture 3 and Responses</td>
	<td>Coffee Break</td>
	<td>Discussion in Working groups and response to Plenary</td>
	<td>Lunch</td>
        <td colspan = "4" style = 'text-align:center';>Free Afternoon</td>
      </tr>
     <tr>
	<td>01-02-2019</td>
        <td>Plenary Lecture 4 and Responses</td>
	<td>Coffee Break</td>
	<td>Discussion in Working groups and response to Plenary</td>
	<td>Lunch</td>
        <td>Symposia, Paper & Poster  Presentations in Parallel Sessions</td>
	<td>Coffee Break</td>
        <td>Symposia, Paper & Poster  Presentations in Parallel Sessions</td>
	<td>Dinner*</td>
      </tr>
    <tr>
	<td>02-02-2019</td>
        <td>Agora II</td>
	<td>Coffee Break</td>
	<td>Closing</td>
	<td>Lunch</td>
	<td colspan = "4">&nbsp;</td>	
      </tr>
    </tbody>
  </table>
</div>
	<p>*Dinner will be&nbsp;from 19:30 to 20:30</p><br />

	<p><span style = "font-size:15pt;text-align:justify;color:#008080"><a href = "media/Broad_Schedule.pdf" download>Download the Broad Schedule as pdf</a></span></p>

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
