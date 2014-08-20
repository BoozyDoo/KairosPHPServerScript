<?php

/* Database Connection Details */

$server = "localhost:3306";
$username = "root";
$password = "george77";
$database = "kairos";

/* Connect to MySQL Server and Select DB to be used */

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);

/* Get Data from App */

$datalon = mysql_real_escape_string($_POST['lon']);
$datalat = mysql_real_escape_string($_POST['lat']);
$datawindspeed = mysql_real_escape_string($_POST['windspeed']);
$datadeg = mysql_real_escape_string($_POST['deg']);
$datasunrise = mysql_real_escape_string($_POST['sunrise']);
$datasunset = mysql_real_escape_string($_POST['sunset']);
$datacountry = mysql_real_escape_string($_POST['country']);
$dataname = mysql_real_escape_string($_POST['name']);
$dataweatherid = mysql_real_escape_string($_POST['weatherid']);
$datadesc = mysql_real_escape_string($_POST['desc']);
$datamain = mysql_real_escape_string($_POST['main']);
$datahumidity = mysql_real_escape_string($_POST['humidity']);
$datatempmax = mysql_real_escape_string($_POST['tempmax']);
$datatempmin = mysql_real_escape_string($_POST['tempmin']);
$datatemp = mysql_real_escape_string($_POST['temp']);

$lon = $datalon;
$lat = $datalat;
$windspeed = $datawindspeed;
$deg = $datadeg;
$sunrise = $datasunrise;
$sunset = $datasunset;
$country = $datacountry;
$name = $dataname;
$weatherID = $dataweatherid;
$description = $datadesc;
$main = $datamain;
$humidity = $datahumidity;
$tempmax = $datatempmax;
$temmin = $datatempmin;
$temp = $datatemp;

/* Create a string that contains a SQL Insert Query and then Execute that Query */

$sql_searchData = "
    INSERT INTO `citySearchdata` SET
         `entrytime` = now(),
         `longitude` = '$lon',
         `latitue` = '$lat',
         `windspeed` = '$windspeed',
         `winddeg` = '$deg',
         `sunrise` = '$sunrise',
         `sunset` = '$sunset',
         `country` = '$country',
         `name` = '$name',
         `weatherid` = '$weatherID',
         `desc` = '$description',
         `main` = '$main',
         `humidity` = '$humidity',
         `tempmax` = '$tempmax',
         `tempmin` = '$temmin',
         `temp` = '$temp'
";

if (!mysql_query($sql_searchData, $con)) {
	die('Error: ' . mysql_error());
} else {
	echo "Comment added";
}

/* Close the Connection*/

mysql_close($con);

?>

