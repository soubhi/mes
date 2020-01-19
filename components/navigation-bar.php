	<?php
	
	$pages_path = "/mes";


	if($use_page != "TRUE") {
		echo "Working";
		header("location: $pages_path/home.php");
	}


?>

<style>
/******************** Hover dropdown style ****************/
@media (min-width: 768px) {
	.dropbtn {
	    padding: 16px;
	    border: none;
	}

	.dropdownn {
	    position: relative;
	    display: inline-block;
	}

	.dropdown-content {
	    display: none;
	    position: absolute;
	    min-width: 160px;
	    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	    z-index: 1;
	}

	.dropdown-content a {
	    color: black;
	    padding: 12px 16px;
	    text-decoration: none;
	    display: block;
	}

	.dropdown-content a:hover {
		
	}

	.dropdownn:hover .dropdown-content {
	    display: block;
	}

	.dropdownn:hover .dropbtn {

	}
}
</style>

<body>
<base href="/mes/" />
<nav class="navbar navbar-inverse navbar-default" aria-label="Main">
  <div class="container-fluid ">
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" role="menubar">
        <li role="menuitem" class="noSubMenu"><a href="home.php" id="home-active">Home</a></li>
        <li role="menuitem" class="noSubMenu"><a href = "committees.php" id="committees-active" >Committees</a></li>
	    <li role="menuitem" class="noSubMenu"><a href = "call-for-papers.php" id="papers-active">Call for Papers</a></li>
        <li class="dropdown hasSubmenu dropdownn" role="menuitem" aria-haspopup="true" aria-expanded="false">
          <a class="dropdown-toggle dropbtn" data-toggle="dropdown" href="program.php" id="program-active">Program<span class="caret" id="program-caret-active"></span></a>
          <ul class="dropdown-menu dropdown-content" role="menu">
						<li role="menuitem"><a href="program/keynotes.php" id="keynotes-active">Keynotes</a></li>
						<li role="menuitem"><a href="program/conferenceProgram.php" id="conferenceProgram-active">Conference Program</a></li>
						<li role="menuitem"><a href="program/conferenceProceedings.php" id="conferenceProceedings-active">Conference Proceedings</a></li>
						<li role="menuitem"><a href="program/conferencePapers.php" id="conferencePapers-active">Conference Papers</a></li>
          </ul>
        </li>
		<li role="menuitem" class="noSubMenu"><a href = "submission.php" id="submission-active">Submission</a></li>
		<!-- 
		<li class = "dropdown hasSubmenu dropdownn" role="menuitem" aria-haspopup="true" aria-expanded="false">
			<a class="dropdown-toggle dropbtn" data-toggle="dropdown" href="#reg" id="registration-active">Registration<span class="caret" id="registration-caret-active" ></span></a>
			<ul class = "dropdown-menu dropdown-content" role="menu">
				<li role="menuitem" ><a href = "registration/register.php" id="register-active">Instructions to Register</a></li>
				<li role="menuitem" ><a href = "registration/donate.php" id="donate-active">Instructions to Donate</a></li>
			</ul>
		</li>
		-->
		<li role="menuitem" class="noSubMenu"><a href="registration/register.php" id="registration-active">Registration</a></li>
		<li role="menuitem" class="noSubMenu"><a href="venue.php" id="venue-active">Venue</a></li>
		<li role="menuitem" class="noSubMenu"><a href="accommodation.php" id="accommodation-active">Accommodation</a></li>
		<li role="menuitem" class="noSubMenu"><a href="placesToVisit.php" id="placesToVisit-active">Places to Visit</a></li>
		<!--
		<li role="menuitem" class="noSubMenu"><a href= "usefulLinks.php" id="usefulLinks-active">Useful Links</a></li>
		<li role="menuitem" class="noSubMenu"><a href = "newsEvents.php" id="newsEvents-active">News &amp; Events</a></li>
		-->
		<li role="menuitem" class="noSubMenu"><a href = "contact.php" id="contact-active">Contact</a></li>
		<li class = "dropdown hasSubmenu dropdownn lastNavElement" role="menuitem" aria-haspopup="true" aria-expanded="false">
			<a class="dropdown-toggle dropbtn" data-toggle="dropdown" href="javascript void(0)" id="more-active">More<span class="caret" id="more-caret-active" ></span></a>
			<ul class = "dropdown-menu dropdown-content" role="menu">
				<li role="menuitem" ><a href= "usefulLinks.php" id="usefulLinks-active">Useful Links</a></li>
				<li role="menuitem" ><a href = "newsEvents.php" id="newsEvents-active">News &amp; Events</a></li>
				<li role="menuitem" ><a href = "supportingTeam.php" id="team-active">Supporting Team</a></li>
			</ul>
		</li>
      </ul>

    </div>
  </div>
</nav>
<script type='text/javascript'> 
$(document).ready(function(){ 
	// Accessibility Related Changes : AccessDeeds
	$(".noSubMenu a").on('focus',function(){
		setTimeout(function(){ 
			$("li.open a").removeAttr("aria-expanded");
			$("li.open").removeClass("open");
		}, 300);
	});
	
	$(".hasSubmenu").on('click', function(){
		
	});

	$("#maincontent").on("focusin", function(){
		setTimeout(function(){ 
			$("li.open a").removeAttr("aria-expanded");
			$("li.open").removeClass("open");
		}, 300);
	});
});
</script>
</body>
