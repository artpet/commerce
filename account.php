<!doctype html>
<html lang="en">
<head>
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <script src="inc/jquery.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <title>My account</title>
</head>
<body>
<?php
include 'inc/header.inc.php';
if ($inc_page === logged)
    include'inc/account.inc.php';
else {
    include'inc/signup.inc.php';
}
?>

<? include 'inc/footer.inc.php' ?>
</body>
</html>
