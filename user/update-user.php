<?php include('../includes/helpers.php');

session_start();


if (!isset($_SESSION['user']) && $_SERVER['REQUEST_URI'] != '/MSPR/index.php') {

    header("location:index.php");
}
if (!is_writable(session_save_path())) {
    echo 'Session path "' . session_save_path() . '" is not writable for PHP!';
}

$id = $_GET['id'];

$data = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'birthday' => $_POST['birthday'],
    'login' => $_POST['login'],
    'password' => $_POST['password'],

];

$dbh = connectDB();
    $stmt = $dbh->prepare('UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email, birthday = :birthday, login = :login, password = :password WHERE id = :id');
    $stmt->bindValue(':first_name', $data['first_name']);
    $stmt->bindValue(':last_name', $data['last_name']);
    $stmt->bindValue(':email', $data['email']);
    $stmt->bindValue(':birthday', $data['birthday']);
    $stmt->bindValue(':login', $data['login']);
    $stmt->bindValue(':password', $data['password']);
    $stmt->bindValue(':id', $id);

    $stmt->execute();


$_SESSION['message'] = 'Done!!';
header('Location: /MSPR/user.php');

,s