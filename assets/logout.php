<?php
include_once "/Applications/MAMP/htdocs/MSPR/includes/helpers.php";
session_destroy();
header('Location: /MSPR/index.php');

$dbh = connectDB();
$stmt = $dbh->prepare('DELETE FROM `shopping_cart`');
$stmt->execute();

?>