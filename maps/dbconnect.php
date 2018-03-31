 <?php

 header('Access-Control-Allow-Origin: *');

     define('HOST','localhost');
     define('USER','root');
     define('PASS','');
     define('DB','mscmisaa_2018');
 
     $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

     if(mysqli_connect_errno($con))
    {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  	$username="root";
	$password="";
	$database="mscmisaa_2018";
 ?>