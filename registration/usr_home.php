<!DOCTYPE html>
<?php
	// STARTING SESSION
	session_start();
	if ($_SESSION['logged_in'] != TRUE) {
		header("location: login.php");
	}
    /*
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    */
	
	include('config.php');
?>

<?php
	$username = $_SESSION['username'];
	$query1 = "SELECT * FROM `acc_details` WHERE `email` = '$username'";
	$result1 = mysqli_query($conn, $query1);
	$row1 = $result1->fetch_assoc();
	$active = (int)$row1['active'];

	if ($active == 0) {
		header("location: activate.php");
	}

?>

<html lang = "en-gb" dir = "ltr">

<head>
	<title>MES10 | Home</title>
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

	.paymentLink {
		margin-top : 15px;
		font-size: 18px;
	}
	/*tr:nth-child(5) { border: solid thin; }*/
td {
    padding-top: .5em;
    padding-bottom: .5em;
}

table th {
      font-size:12pt;
}


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


<?php	
	$query_fee = "SELECT * FROM `reg_details` WHERE `email` = '$username'";
	$result_fee = mysqli_query($conn, $query_fee);
	$row_fee = $result_fee->fetch_assoc();

	$country = $row_fee['country_work'];
	$firstName = $row_fee['first_name'];
	$lastName = $row_fee['last_name'];
	//echo $country;
	
	$query_sel = "SELECT `income_type` FROM `country` WHERE `country_name` = '$country'";
	$result_sel = mysqli_query($conn,$query_sel);
	$row_sel = $result_sel->fetch_assoc();
	$income = $row_sel['income_type'];
	//echo "Country's income type :" .$income."<br />";				
	
	$query_in = "SELECT * FROM `reg_fee` WHERE `income_type` = '$income'";
	$result_in = mysqli_query($conn, $query_in);
	$row_in = $result_in->fetch_assoc();
	$fee_early = (int)$row_in['early_bird'];
	//echo "Your fee: \xE2\x82\xAc" .$fee."<br />";
	//echo "Your fee (INR): ";
	//echo money_format('&#8377;%!n', $fee);
	$fee_normal = (int)$row_in['normal'];
	$fee_delay = (int)$row_in['delay'];
	
	//echo "<br>";
	
	$lunch_no = (int)$row_fee["lunch"];	
	$normalDinner_no = (int)$row_fee["normal_dinner"];
	$reception_no = (int)$row_fee["reception"];
	$confDinner_no = (int)$row_fee["conf_dinner"];
	// DONATION
	$donation = (int)$row_fee["donation"];

	//echo "<br>";

	$query_cc = "SELECT * FROM `coupon_cost`";
	$result_cc = mysqli_query($conn, $query_cc);
	$row_cc = $result_cc->fetch_assoc();

	$lunch_cc = (int)$row_cc["lunch"];	
	$normalDinner_cc = (int)$row_cc["normal_dinner"];
	$reception_cc = (int)$row_cc["reception"];
	$confDinner_cc = (int)$row_cc["conf_dinner"];
	//echo "<br>";
	
	$sub_total = ($lunch_no*$lunch_cc)+($normalDinner_no*$normalDinner_cc)+($reception_no*$reception_cc)+($confDinner_no*$confDinner_cc)+ $donation;
	$total_early = $fee_early+$sub_total;
	$total_normal = $fee_normal+$sub_total;
	$total_delay = $fee_delay+$sub_total;
	//echo "total = $total"."<br>";

?>
	<p> 
	<div class="logout" style="float:right; font-size: 22px;"><a href="registration/logout.php">Logout</a></div>
	<br>
	<span style="font-size:20px;">Welcome <?php echo $firstName." ".$lastName; ?>!</span>
	</p>
	<br>
	<!--Country where you reside and work : <?php echo $country?> (<?php echo $income?>)<br><br>-->

	<h4><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Fee</span></strong><span style="font-color:black">&#8224;</span>:</h4>
	<br>
	<table border ="0" width="100%">	
			
		<tr>
			<th> Donation </th>
		    <td> </td>
			<td> <?php echo money_format('&#8377;%!n', $donation)?> </td>
		</tr>
		<tr>
			<th> Registration fee &nbsp</th>
			
		</tr>
		<tr>
			<th> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Early Registration </th>
			<td> </td>
			<td> <?php echo money_format('&#8377;%!n', $fee_early);?> </td>
		</tr>
		<tr>
			<th> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Normal Registration </th>
			<td> </td>
			<td> <?php echo money_format('&#8377;%!n', $fee_normal);?> </td>
		</tr>
		<tr>
			<th> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Delayed Registration </th>
			<td> </td>
			<td> <?php echo money_format('&#8377;%!n', $fee_delay);?> </td>
		</tr>
		<tr>
			
		</tr>
		<tr>
			
		</tr>	
        <tr>
            <th>Amount for additional </th>
            <td> </td>
            <td> </td>
        </tr>
		<tr>
			<th> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Lunch </th>
			<td> <?php echo $lunch_no?> X <?php echo money_format('&#8377;%!n', $lunch_cc)?></td>
			<td><?php echo money_format('&#8377;%!n', $lunch_no*$lunch_cc) ?> </td>
		</tr>
		
		<tr>
			<th> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Normal Dinner </th>
			<td> <?php echo $normalDinner_no?> X <?php echo money_format('&#8377;%!n', $normalDinner_cc)?></td>
			<td> <?php echo money_format('&#8377;%!n', $normalDinner_no*$normalDinner_cc)?> </td>
		</tr>

		<tr>
			<th> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Reception Dinner </th>
			<td> <?php echo $reception_no?> X <?php echo money_format('&#8377;%!n', $reception_cc)?></td>
			<td> <?php echo money_format('&#8377;%!n', $reception_no*$reception_cc)?> </td>
		</tr>
		
		<tr>
			<th> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Conference Dinner </th>
			<td> <?php echo $confDinner_no?> X <?php echo money_format('&#8377;%!n', $confDinner_cc)?></td>
			<td> <?php echo money_format('&#8377;%!n', $confDinner_no*$confDinner_cc)?> </td>
		</tr>

		<tr>
			<td> </td>
			<td><hr style="height:2px;border:none;color:#333;background-color:#333;" /></td>
			<td><hr style="height:2px;border:none;color:#333;background-color:#333;" /></td>
		</tr>
		<tr>
			<td> </td>
			<td rowspan="3"> <strong> Total Amount </strong></td>
			<td> <strong> <?php echo money_format('&#8377;%!n',$total_early)." (Early Registration)<br>(If paid before 30th Nov, 2018)";?>* </strong></td>
		</tr>
		<tr>
			<td> </td>
			<td> <strong> <?php echo money_format('&#8377;%!n',$total_normal)." (Normal Registration)<br>(If paid before 15th Jan, 2019)";?>*</strong></td>
		</tr>
		<tr>
			<td> </td>
			<td> <strong> <?php echo money_format('&#8377;%!n',$total_delay)." (Delayed Registration)<br>(If paid before 25th Jan, 2019)";?>* </strong></td>
		</tr>
				
		<tr>
			<td> </td>
			<td><hr style="height:2px;border:none;color:#white;background-color:white;" /> </td>
			<td> </td>
		</tr>	
	</table>
 
	<b>
	* We follow the Indian Standard Time (IST) for deciding date and time.<br>
	&#8224; <a href="registration/register.php" target="_blank">Click here</a> to know the Registration fee and other fees details.
	<div class = paymentLink >
	<p> <a href="registration/paymentProcedure.php" target="_blank"> Click here</a> for the <em>payment procedure</em> and related details.<br></p>
	</div>


	</b>

	<br>
	<br>
	
	<p style="font-size:17px;">
	<a href="registration/changeDetails.php" target="_top"> Click here </a> to change the <b>number of Coupons or Donation Amount details.

</b>.
	</p>

	<p style="font-size:17px;">
	<a href="registration/changePassword.php" target="_top"> Click here </a> to change your <b>password</b>.
	</p>
	<br>
	
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
