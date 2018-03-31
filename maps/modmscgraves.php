<?php 
header('Content-type: text/xml');

$dom = new DOMDocument("1.0");
$node = $dom->createElement("graves");
$parnode = $dom->appendChild($node);

require("dbconnect.php");

// Start XML file, create parent node// Opens a connection to a MySQL server

$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {  die('Not connected : ' . mysql_error());}

// Set the active MySQL database

$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table

$query = "SELECT * FROM space_tbl";
$result = mysql_query($query);


if (!$result) {
  die('Invalid query: ' . mysql_error());
}

// Iterate through the rows, adding XML nodes for each

while ($row = @mysql_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("grave");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['SPACE_ID']);
  $newnode->setAttribute("sect",$row['SPACE_SECTION']);
  $newnode->setAttribute("lot",$row['SPACE_LOT']);
  $newnode->setAttribute("gra",$row['SPACE_GRAVE']);
  $newnode->setAttribute("lat", $row['SPACE_LATITUDE']);
  $newnode->setAttribute("longt", $row['SPACE_LONGITUDE']);
  $newnode->setAttribute("stat", $row['SPACE_STATUS']);

}
ob_clean(); //Clean (erase) the output buffer
echo $dom->saveXML();

?>