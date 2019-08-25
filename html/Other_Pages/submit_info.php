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
<title>Tracking Practice Submit Info</title>

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

<!-- Headings -->
<h1>Information Submitted.</h1>

<!-- Feed info from main page to add user info to database -->
<?php
  $userC = rand(1,999999999);
  $first = '"' . $_POST["FirstName"] . '"';
  $last = '"' . $_POST["LastName"] . '"';
  $fNo = $_POST["favoriteNo"];

  //validity check
  if ($userC <= 0 or $first == "" 
      or $last == "" or $fNo <= "0") {
    echo "Invalid Submission.";
    exit;
  }

  //Writing query
  $sql = "Insert into tracking_website.sample (userNo, LastName, FirstName, favNo) VALUES (" . $userC . "," . $last . "," . $first . "," . $fNo . ");";
  
  //submit query
  mysqli_query($conn, $sql);

?>

<p>Success! Go back to home and query your submission to see it!</p>

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
