<?php
// define variables and set to empty values
$uname = $pword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["uname"]);
  $pword = test_input($_POST["pword"]);
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h1>" .$uname. "</h1>";
echo "<br><h1>" .$uname. "</h1></br>";
?>

