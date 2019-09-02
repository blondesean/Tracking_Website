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

<!-- GTM Header File -->
<?php include("./php/Page Pieces/GTM_Header.html"); ?>

</head>
<body>

<!-- GTM Body Container -->
<?php include("./php/Page Pieces/GTM_Body.html"); ?>

<!-- Insert header -->
<?php include("./php/Page Pieces/header.html"); ?>

<!-- List of Features -->
<p>Here is where I am going to list features of the site.
</br>In order of the order they were added.</p>
<ul>
  <li>Apache/2.4.10 (Raspbian) Server at seansite.ddns.net Port 80</li>
  <li>GTM Tags</li>
    <ul>
      <li>Global Site Tag GA</li>
      <li>Fires on all page views</li>
      <li>php Header and Body containers for easy updates</li>
    </ul>
  <li>php code</li>
  <li>Link to another page</li>
  <li>php Header and Footer</li>
  <li>Page redirect to Google</li>
</ul>

<!-- Content and Main Body -->
<p>Here is where we will test different text. </br></p>

<!-- Link to another page -->
<p>Click <a href="./Other_Pages/Page_Template.php">here</a> to go to another page.</p>

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

<p>Testing redirecting pages</br>
Click <a href="./Other_Pages/Redirect_Page.php">here</a> to test out a redirect.</p>

<!-- Insert footer -->
<?php include("./php/Page Pieces/footer.html"); ?>

</body>
</html>
