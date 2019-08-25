<?php
//display error and connection info
//phpinfo();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
<title>Tracking Practice Page</title>

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
<h1>Test Home Page</h1>
<h2>Hosted by Sean</h2>

<!-- List of Features -->
<p>Here is where I am going to list features of the site.
</br>In order of the order they were added.</p>
<ul>
  <li>Apache/2.4.10 (Raspbian) Server at seansite.ddns.net Port 80</li>
  <li>GTM Tags</li>
    <ul>
      <li>Global Site Tag GA</li>
      <li>Fires on all page views</li>
    </ul>
  <li>php code</li>
  <li>Link to another page</li>
</ul>

<!-- Content and Main Body -->
<p>Here is where we will test different text. </br></p>

<!-- Link to another page -->
<p>Click <a href="./Other_Pages/Page_Template.php">here</a> to go to another page </p>

<!-- Link to an imagine -->
<p>Here is a great image of a moth. Thanks <a href="https://www.scmp.com/magazines/post-magazine/long-reads/article/3003821/insect-apocalypse-coming-study-hong-kong-moth">Post Magazine</a>.</p>
<img src="./Assets/Pictures/moth.jpg" width="82" height="86" title="Disappearing Moth" alt="Moth">

<!-- Running samples of php code -->
<p>Running php code in this section:</p>
<ul>
  <li>Static Text</li>
  <ul>
    <li>
    <?php 
      echo "Hello World!";
    ?>
    </li>
  </ul>
</ul>

<p>Here we are going to try to read from a database:</p>
<p>What field do you want to query? Here are your choices:</p>
<ul>
  <li>userNo</li>
  <li>LastName</li>
  <li>FirstName</li>
  <li>favNo</li>
</ul>

<form action = "./Other_Pages/query_sample.php" method = "post">
  Enter the field to get a list of:<input name = "field" type = "text">
  <input type = "submit">
</form>

<p>Ok now let's try writing to the server</p>
<form action = "./Other_Pages/submit_info.php" method = "post">
First name: <input type = "text" name = "FirstName" value = "Mickey"></br>
Last name: <input type = "text" name = "LastName" value = "Mouse"></br>
Favorite Number: <input type = "number" name ="favoriteNo" value = 1></br>
<input type="submit">
</form>

<p>Clicking the "Submit" button will record your information in the database. You will be able to see it showing up in the results of the query above.</p>

</body>
</html>
