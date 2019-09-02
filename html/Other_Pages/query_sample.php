<?php
//display error and connection info
//phpinfo();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//echo "Post:".print_r($_POST,true);
//echo "Get: ".print_r($_GET,true);

//connection info
require_once(dirname(__FILE__) . '/../php/db_conn_info.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Tracking Practice Query Results</title>

<!-- GTM Header File -->
<?php include("./../php/Page Pieces/GTM_Header.html"); ?>

</head>
<body>

<!-- GTM Body Container -->
<?php include("./../php/Page Pieces/GTM_Body.html"); ?>

<!-- Fed from home page, user input query -->
<!-- Show the results from query requested on previous page -->
<h1>Here is your list of 
<?php 
  echo $_POST["field"];
?>s... 
</h1>

<p>
<?php 
  $field = $_POST["field"];
  //validity check
  if ($field != "userNo" and $field != "LastName" 
      and $field != "FirstName" and $field != "favNo") {
    echo $field . " is not a real field.";
    exit;
  }

  $sql = "Select " . $field . " From tracking_website.sample Limit 100;";
  $results = mysqli_query($conn, $sql);
  $checkResults = mysqli_num_rows($results);

  //display if query was successful
  if ($checkResults > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
      echo $row[$field] . "</br>";
    } 
  } 
?></p>

<!-- Output info about connection, protect password (its processed served side so it is ok in the include / raw file) -->
<p>Connection Parameters</p>
<ui>
  <li><?php echo $dbServername; ?></li>
  <li><?php echo $dbUsername; ?></li>
  <li><?php echo hash('sha256', $dbPassword); ?></li>
  <li><?php echo $dbName; ?></li>
</ui>

<!-- Insert footer -->
<?php include("./php/Page Pieces/footer.html"); ?>

</body>
</html>
