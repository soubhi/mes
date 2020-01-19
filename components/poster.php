<?php
	
	$pages_path = "/mes";


	if($use_page != "TRUE") {
		echo "Working";
		header("location: $pages_path/home.php");
	}


?>

<body>
<base href="/mes/" />
	<figure>
		<a href="media/poster/MES10_poster.jpg" aria-hidden="true" tab-index="-1">
			<img src="media/poster/MES10_poster.jpg" alt="Poster" width=95% style="padding-left: 5%">
		</a>
		<figcaption  style="text-align:center; padding: 5% 0% 5% 0%">Download Poster as <a href="media/poster/MES10_poster.jpg" download>JPG</a> or <a href="media/poster/MES10_poster.pdf" download>PDF</a></figcaption>
	</figure>
</body>
