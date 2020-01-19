<?php
	session_start();

	$pages_path = "/mes";

	if($use_page != "TRUE") {
		echo "Working";
		header("location: $pages_path/home.php");
	}

	if (isset($_SESSION['logged_in'])) 
		if ($_SESSION['logged_in'] == TRUE) 
			$fullName = $_SESSION['fullname'];

?>

<body>
<base href="/mes/" />
<header class="header-class">
	<div id="accessibililtyTopBar">
		<div class="container">
			<div class="col-md-5">
				<a href="javascript:void(0);" id="gotonav">Go to Navigation</a>
				<a href="javascript:void(0);" tabindex="-1" role="presentation" aria-hidden="true" style="color:#ccc">|</a>
				<a href="javascript:void(0);" id="gotomain">Go to Main Content</a>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-3 text-right">
				<a href="javascript:void(0)" role="button" aria-label="Increase Font Size" id="increaseFontSize">A+</a>
				<a href="javascript:void(0);" tabindex="-1" role="presentation" aria-hidden="true" style="color:#ccc">|</a>
				<a href="javascript:void(0)" role="button" aria-label="Reset Font Size" id="resetFontSize">A</a>
				<a href="javascript:void(0);" tabindex="-1" role="presentation" aria-hidden="true" style="color:#ccc">|</a>
				<a href="javascript:void(0)" role="button" aria-label="Decrease Font Size" id="decreaseFontSize">A-</a>
			</div>
			<script>
				$(document).ready(function(){
					$("#gotonav").on('click',function(){
						$("#home-active").focus();
					});
					$("#gotomain").on('click',function(){
						$("#maincontent").attr('tabindex','-1').focus();
					});
					
					$("#increaseFontSize").on('click',function(){
						ChangeFont('1');
					});
					$("#decreaseFontSize").on('click',function(){
						ChangeFont('-1');
					});
					$("#resetFontSize").on('click',function(){
						ChangeFont('0');
					});
					
					var MAXDav = 2;
					var MINDav = -2;
					var davSize = 0; 
					var lblDavSizeValue = 0;
					$(document).ready(function () {
						davSize = 0;
						if (lblDavSizeValue != 0) {
							HandlePostBack();
						}
					});
					function HandlePostBack() {
						davSize = lblDavSizeValue;
						ResetForm(lblDavSizeValue);
					}

					function ChangeFont(size) {
						davSize = lblDavSizeValue;
						if (size == '0') size = -davSize; //to reset font size to its actual value           
						davSize = parseInt(davSize) + parseInt(size);
						if (davSize > MAXDav) {
							alert("You have reached maximum font size.");
							lblDavSizeValue = parseInt(davSize) - parseInt(size);
							return;
						}
						else {
							if (davSize < MINDav) {
								alert("You have reached minimum font size.");
								lblDavSizeValue = parseInt(davSize) - parseInt(size);
								return;
							}
						}
						lblDavSizeValue = davSize;
						ResetForm(size);
					}

					function ResetForm(size) {
						$('body').add('h1, h2, h3').add('td').add('th').add('a').add('span').add('p').add('li').each(function () {
							this.style.fontSize = (parseInt(getStyle(this, 'font-size').replace("px", "")) + parseInt(size)) + 'px';
						});
					}

					function getStyle(el, styleProp) {
						var camelize = function (str) {
							return str.replace(/\-(\w)/g, function (str, letter) {
								return letter.toUpperCase();
							});
						};

						if (el.currentStyle) {
							return el.currentStyle[camelize(styleProp)];
						} else if (document.defaultView && document.defaultView.getComputedStyle) {
							return document.defaultView.getComputedStyle(el, null)
												.getPropertyValue(styleProp);
						} else {
							return el.style[camelize(styleProp)];
						}
					}
    
				});
			</script>
			
		</div>
	</div>
	<div class = "row" style= "margin:0px !important">
	
		<!--website heading-->
		<div class="col-xs-12 col-sm-8">
			<p class = "logo">
				<a href = "home.php" role="heading" aria-level="1">Mathematics Education and Society<br />10th International Conference, Hyderabad, India<br /> Jan 28th - Feb 2nd, 2019</a>
			</p>
		</div>

		<div class="col-xs-12 col-sm-4 top-right container">
			<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE) :?>
				<span style="color:white;"><a href="registration/usr_home.php" style="color:white;">&nbsp <?php echo "$fullName"; ?> &nbsp</a>  &nbsp|&nbsp</span><span><a href="registration/logout.php" style="color:white;">&nbsp Logout &nbsp</a></span></span>
			<?php else :?>
				<span style="color:white;"><a href="registration/signUp.php" style="color:white;">&nbsp Register for the conference &nbsp</a>&nbsp|&nbsp</span><span><a href="registration/login.php" style="color:white;">&nbsp Login &nbsp</a></span>
			<?php endif ?>
			<p class="social-media">
				<a href="http://www.mescommunity.info/" target="_blank" >
					<img src="media/logos/mes_community.png" alt="MES Community" width="90px">
				</a>	
				</a>
				<a href="https://www.uohyd.ac.in/" target="_blank">
					<img src="media/logos/uoh.png" alt="University of Hyderabad" width="70px">
				</a>
			
			</p>
		</div>
	</div>			
</header>

</body>

