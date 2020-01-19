<!DOCTYPE HTML>

<html lang = "en-gb" dir = "ltr">

<head>
	<title> Countries and HDI </title>
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

<style>
	table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
	text-align:center;
}
</style>

<body>

<!------------ACTIVE TAB STYLE-------------------->
<style>
	#nothing-active {	
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


<h2><strong><span style="font-size:17pt;text-align:justify;color:#008080;">Countries and HDI</span></strong></h2> <br>
		<table>
			<tr style = "background-color:#ff7c80">
				<th>S.No</th>
				<th>High Income Countries</th>
				<th>Middle Income Countries</th>
				<th colspan = "2">Low Income Countries</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Norway</td>
				<td>Belarus</td>
				<td>Moldova (Rep. of)</td>
				<td>Swaziland</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Australia</td>
				<td>Oman</td>
				<td>Botswana</td>
				<td>Syria</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Switzerland</td>
				<td>Barbados</td>
				<td>Gabon</td>
				<td>Angola</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Germany</td>
				<td>Uruguay</td>
				<td>Paraguay</td>
				<td>Tanzania</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Denmark</td>
				<td>Bulgaria</td>
				<td>Egypt</td>
				<td>Nigeria</td>
			</tr>
			<tr>
				<td>6</td>
				<td>Singapore</td>
				<td>Kazakhstan</td>
				<td>Turkmenistan</td>
				<td>Cameroon</td>
			</tr>
			<tr>
				<td>7</td>
				<td>Netherlands</td>
				<td>Bahamas</td>
				<td>Indonesia</td>
				<td>Papua New Guinea</td>
			</tr>
			<tr>
				<td>8</td>
				<td>Ireland</td>
				<td>Malaysia</td>
				<td>Palestine, State of</td>
				<td>Zimbabwe</td>
			</tr>
			<tr>
				<td>9</td>
				<td>Iceland</td>
				<td>Palau</td>
				<td>Viet Nam</td>
				<td>Solomon Islands</td>
			</tr>
			<tr>
				<td>10</td>
				<td>Canada</td>
				<td>Panama</td>
				<td>Philippines</td>
				<td>Mauritania</td>

			</tr>
			<tr>
				<td>11</td>
				<td>United States</td>
				<td>Antigua and Barbuda</td>
				<td>El Salvador</td>
				<td>Madagascar</td>

			</tr>
			<tr>
				<td>12</td>
				<td>Hong Kong, China</td>
				<td>Seychelles</td>
				<td>Bolivia</td>
				<td>Rwanda</td>
			</tr>
			<tr>
				<td>13</td>
				<td>New Zealand</td>
				<td>Mauritius</td>
				<td>South Africa</td>
				<td>Comoros</td>
			</tr>
			<tr>
				<td>14</td>
				<td>Sweden</td>
				<td>Trinidad and Tobago</td>
				<td>Kyrgyzstan</td>
				<td>Lesotho</td>
			</tr>
			<tr>
				<td>15</td>
				<td>Liechtenstein</td>
				<td>Costa Rica</td>
				<td>Iraq</td>
				<td>Senegal</td>
			</tr>
			<tr>
				<td>16</td>
				<td>United Kingdom</td>
				<td>Serbia</td>
				<td>Cabo Verde</td>
				<td>Haiti</td>
			</tr>
			<tr>
				<td>17</td>
				<td>Japan</td>
				<td>Cuba</td>
				<td>Morocco</td>
				<td>Uganda</td>
			</tr>
			<tr>			
				<td>18</td>
				<td>Korea (South)</td>
				<td>Iran</td>
				<td>Nicaragua</td>
				<td>Sudan</td>
			</tr>
			<tr>
				<td>19</td>
				<td>Israel</td>
				<td>Georgia</td>
				<td>Guatemala</td>
				<td>Togo</td>
			</tr>
			<tr>
				<td>20</td>
				<td>Luxembourg</td>
				<td>Turkey</td>
				<td>Namibia</td>
				<td>Benin</td>
			</tr>
			<tr>
				<td>21</td>
				<td>France</td>
				<td>Venezuela</td>
				<td>Guyana</td>
				<td>Yemen</td>
			</tr>
			<tr>
				<td>22</td>
				<td>Belgium</td>
				<td>Sri Lanka</td>
				<td>Micronesia (Fed. Sts of)</td>
				<td>Afghanistan</td>
			</tr>
			<tr>
				<td>23</td>
				<td>Finland</td>
				<td>Saint Kitts and Nevis</td>
				<td>Tajikistan</td>
				<td>Malawi</td>
			</tr>
			<tr>
				<td>24</td>
				<td>Austria</td>
				<td>Albania</td>
				<td>Honduras</td>
				<td>Côte d'Ivoire</td>
			</tr>
			<tr>
				<td>25</td>
				<td>Slovenia</td>
				<td>Lebanon</td>
				<td>India</td>
				<td>Djibouti</td>
			</tr>
			<tr>
				<td>26</td>
				<td>Italy</td>
				<td>Mexico</td>
				<td>Bhutan</td>
				<td>Gambia</td>
			</tr>
			<tr>
				<td>27</td>
				<td>Spain</td>
				<td>Azerbaijan</td>
				<td>Timor-Leste</td>
				<td>Ethiopia</td>
			</tr>
			<tr>
				<td>28</td>
				<td>Czech Republic</td>
				<td>Brazil</td>
				<td>Vanuatu</td>
				<td>Mali</td>
			</tr>
			<tr>
				<td>29</td>
				<td>Greece</td>
				<td>Grenada</td>
				<td>Congo (Brazzaville)</td>
				<td>Congo (Kinshasa)</td>
			</tr>
			<tr>
				<td>30</td>
				<td>Brunei</td>
				<td>Bosnia and Herzegovina</td>
				<td>Equatorial Guinea</td>
				<td>Liberia</td>
			</tr>
			<tr>
				<td>31</td>
				<td>Estonia</td>
				<td>Macedonia (Rep. of)</td>
				<td>Kiribati</td>
				<td>Guinea-Bissau</td>
			</tr>
			<tr>
				<td>32</td>
				<td>Andorra</td>
				<td>Algeria</td>
				<td>Laos</td>
				<td>Eritrea</td>
			</tr>
			<tr>
				<td>33</td>
				<td>Cyprus</td>
				<td>Armenia</td>
				<td>Bangladesh</td>
				<td>Sierra Leone</td>
			</tr>
			<tr>
				<td>34</td>
				<td>Malta</td>
				<td>Ukraine</td>
				<td>Ghana</td>
				<td>Mozambique</td>
			</tr>
			<tr>
				<td>35</td>
				<td>Qatar</td>
				<td>Jordan</td>
				<td>Zambia</td>
				<td>South Sudan</td>
			</tr>
			<tr>
				<td>36</td>
				<td>Poland</td>
				<td>Peru</td>
				<td>Sao Tome and Principe</td>
				<td>Guinea</td>
			</tr>
			<tr>
				<td>37</td>
				<td>Lithuania</td>
				<td>Thailand</td>
				<td>Cambodia</td>
				<td>Burundi</td>
			</tr>
			<tr>
				<td>38</td>
				<td>Chile</td>
				<td>Ecuador</td>
				<td>Nepal</td>
				<td>Burkina Faso</td>
			</tr>
			<tr>
				<td>39</td>
				<td>Saudi Arabia</td>
				<td>China</td>
				<td>Myanmar</td>
				<td>Chad</td>
			</tr>
			<tr>
				<td>40</td>
				<td>Slovakia</td>
				<td>Fiji</td>
				<td>Kenya</td>
				<td>Niger</td>
			</tr>
			<tr>
				<td>41</td>
				<td>Portugal</td>
				<td>Mongolia</td>
				<td>Pakistan</td>
				<td>Cntrl African Republic</td>
			</tr>
			<tr>
				<td>42</td>
				<td>United Arab Emirates</td>
				<td>Saint Lucia</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>43</td>
				<td>Hungary</td>
				<td>Jamaica</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>44</td>
				<td>Latvia</td>
				<td>Colombia</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>45</td>
				<td>Argentina</td>
				<td>Dominica</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>46</td>
				<td>Croatia</td>
				<td>Suriname</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>47</td>
				<td>Bahrain</td>
				<td>Tunisia</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>48</td>
				<td>Montenegro</td>
				<td>Dominican Republic</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>49</td>
				<td>Russian Federation</td>
				<td>St Vincent & the Grenadines</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>50</td>
				<td>Romania</td>
				<td>Tonga</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>51</td>
				<td>Kuwait</td>
				<td>Libya</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>52</td>
				<td>&nbsp;</td>
				<td>Belize</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>53</td>
				<td>&nbsp;</td>
				<td>Samoa</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>54</td>
				<td>&nbsp;</td>
				<td>Maldives</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>55</td>
				<td>&nbsp;</td>
				<td>Uzbekistan</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>

		<br><p>Note: Our classification of countries into High, Middle and Low in-come countries the groups  the following classification is based on the following list given in One World Nations Online.<br>
			<a href ="http://www.nationsonline.org/oneworld/human_development.htm" target = "_blank">http://www.nationsonline.org/oneworld/human_development.htm</a></p>

		<p>We treat the countries with Very High HDI as High Income Countries; those with High HDI as Middle Income Countries; and those with Middle and Low HDI are clubbed and treated as Low Income Countries.</p> <br> <br>


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
