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

<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NWGHQ4D');</script>
<!-- End Google Tag Manager -->
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWGHQ4D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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

<!-- Go back go the main page -->
<p>Click <a href="./../index.php">here</a> to go back to the home page.</p>

</body>
</html>
