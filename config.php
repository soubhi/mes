<?php
/********** CONNECTOIN TO MES-DATABASE ON BLUEHOST **************/
        // SET CONNECTION DETAILS
	        
	define('DB_SERVER', 'mes10.uohyd.ac.in');
        define('DB_USERNAME', 'mes10pt8_mse10');
        define('DB_PASSWORD', 'vPV9k423%=mR');
        define('DB_DATABASE', 'mes10pt8_registration');
	//define('DB_DATABASE', 'mes10pt8_test');
	/*
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'root123');
	define('DB_DATABASE', 'mes');*/
        // CONNECT TO THE DATABASE
        $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if ($conn->connect_error) {
                echo "Connection Unsuccessful!"."<br />";
                echo $conn->connect_error;
                die();
        } else {
		echo "";                
		//echo "Connection Successful!";
                //echo "<br /> '".DB_USERNAME."' @ '".DB_SERVER."'";
                //echo "<br />"."Database : '".DB_DATABASE."'";
        }

?>
