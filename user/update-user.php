<?php include('includes/helpers.php'); ?>

<?php
$id = $_GET['id'];


$data = [
    'login' => $_POST['login'],
    'password' => $_POST['password'],



];

$dbh = connectDB();
$query = $dbh->prepare('UPDATE `users` SET `login` = :login, `password` = :password WHERE `users`.`id` = :id;');
$query->bindValue(':login', $data['login']);
$query->bindValue(':password', $data['password']);
$query->bindValue(':id', $id);
$query->execute();


$_SESSION['message'] = 'Done!!';
header('Location: /MSPR/user.php');