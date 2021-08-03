<?php
//$lang = "de-DE";
$lang = $_POST['language'];
if ($lang == "da-DK"){include ("sprache/dansk.php");}
elseif ($lang == "ru-RU") {include ("sprache/russian.php");}
elseif ($lang == "de-DE") {include ("sprache/deutsch.php");}
else {include ("sprache/english.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $meta_description; ?>" />
	<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
	<meta name="author" content="Martin Podolak" />
	<title><?php echo $meta_title; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://slavonic.github.io/css/fonts.css" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<link href="https://pod-o-mart.github.io/keyboardBookmarklets/kb-slav.css" rel="stylesheet" type="text/css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://pod-o-mart.github.io/keyboardBookmarklets/kb-slav.js" type="text/javascript"></script>
</head>
<body>

<?php
require "cyracademisator-cu.php";
?>

</body>
</html>