<?php
    header('Location: http://google.com');
    exit();
?>
<!-- ^^^ you need to redirect before any other code is loaded in the client browser !-->

<!DOCTYPE html>
<html>
<head>
<title>Tracking Practice Redict Page</title>

<!-- GTM Header File -->
<?php include("./../php/Page Pieces/GTM_Header.html"); ?>

</head>
<body>

<!-- GTM Body Container -->
<?php include("./../php/Page Pieces/GTM_Body.html"); ?>

<!-- Headings -->
<h1>Invisible Page</h1>

<!-- This page shouldn't actually be seen -->
<p>This page shouldn't actually be seen, it should have been a redirect.</p>

<!-- Insert footer -->
<?php include("./php/Page Pieces/footer.html"); ?>

</body>
</html>
