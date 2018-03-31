<?php
require("dbconnect.php");

// Gets data from URL parameters
$sec = $_GET['section'];
$lot = $_GET['lot'];
$grave = $_GET['grave'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$stat = $_GET['stat'];

// Opens a connection to a MySQL server
$connection=mysql_connect ("localhost", $username, $password);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Insert new row with user data
$query = sprintf("INSERT INTO space_tbl " .
         " (SPACE_SECTION, SPACE_LOT, SPACE_GRAVE, SPACE_LATITUDE, SPACE_LONGITUDE,SPACE_STATUS) " .
         " VALUES ('%s', '%s', '%s', '%s', '%s', '%s');",
         mysql_real_escape_string($sec),
         mysql_real_escape_string($lot),
         mysql_real_escape_string($grave),
         mysql_real_escape_string($lat),
         mysql_real_escape_string($lng),
         mysql_real_escape_string($stat));

$result = mysql_query($query);

if (!$result) {
  die('Invalid query: ' . mysql_error());
}

?>