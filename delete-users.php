<?php include_once 'includes/helpers.php';

$id = $_GET['id'];

$dbh = connectDB();
$stmt = $dbh->prepare('DELETE FROM `users` WHERE `users`.`id` = :id');
$stmt->bindValue(':id', $id);
$stmt->execute();


header('Location: assets/user/users.php');