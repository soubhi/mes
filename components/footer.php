<?php

	$pages_path = "/mes";


	if($use_page != "TRUE") {
		echo "Working";
		header("location: $pages_path/home.php");
	}

?>

<footer>
	<p class = "footer-class">
          <small>
            10th International Mathematics Education and Society (MES10) Conference
          </small><br />
          <small>
            <a href="http://www.mescommunity.info/" target="_blank">Mathematics Education and Society</a>
          </small><br />
          <small>
            <a href="http://www.uohyd.ac.in/" target="_blank">University of Hyderabad</a>
          </small><br />
</footer>

