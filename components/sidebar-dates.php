	<?php
	
	$pages_path = "/mes";


	if($use_page != "TRUE") {
		echo "Working";
		header("location: $pages_path/home.php");
	}


?>

<body>  
<base href="/mes/" />
	<div class="sidebar-deadlines deadlines-block">
		<p>
			<span style="font-size: 16pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;" role="heading" aria-level="2">
				<strong>Important Deadlines</strong>
			</span><br />
			<span style="font-size:10pt;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;text-indent:0px;">
				Paper <a href="submission.php" aria-label="Paper Submission: 15th June 2018. Click for instructions.">Submission:</a> 15th Jun 2018<br />
				CameraReady <a href="submission.php" aria-label="CameraReady Submission: 15th September 2018.">Submission:</a> 15th Sep 2018 <br>
				Early <a href="registration/register.php" aria-label="Early Registration: 30th November 2018. Click for instructions.">Registration:</a> 30th Nov 2018<br />
				Normal <a href="registration/register.php" aria-label="Normal Registration: 15th January 2019. Click for instructions.">Registration:</a> 15th Jan 2019<br />
				Delayed <a href="registration/register.php" aria-label="Delayed Registration: 25th January 2019. Click for instructions.">Registration:</a> 25th Jan 2019<br />
			</span>
		</p>
	</div>

</body>
