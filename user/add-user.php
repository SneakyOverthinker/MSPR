<?php
include_once '../includes/helpers.php';

var_dump($_POST);

$data = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'birthday' => $_POST['birthday'],
    'login' => $_POST['login'],
    'password' => $_POST['password'],

];

try {
    $dbh = connectDB();
    $stmt = $dbh->prepare('INSERT INTO users (first_name, last_name, email, birthday, login, password) VALUES (:first_name, :last_name, :email, :birthday, :login, :password)');
    $stmt->bindValue(':first_name', $data['first_name']);
    $stmt->bindValue(':last_name', $data['last_name']);
    $stmt->bindValue(':email', $data['email']);
    $stmt->bindValue(':birthday', $data['birthday']);
    $stmt->bindValue(':login', $data['login']);
    $stmt->bindValue(':password', $data['password']);
    $stmt->execute();

    $id = $dbh->lastInsertId();

    header("Location: ../user.php?id=$id");

} catch (Exception $exception) {
    echo 'ERREUR';
    die();
}
