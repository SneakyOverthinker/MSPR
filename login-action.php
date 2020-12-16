<?php

include_once 'includes/header.php';
//récu données via $_POST


function getUser($login)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users where login = :login");
    $stmt->bindValue(':login', $login);
    $stmt ->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

$user = getUser($_POST['login']);

$_SESSION['user'] = $user;


/*function getUser($id)
{
    $dbh = connectDB();
// On prepare la requête SQL
    $stmt = $dbh->prepare("SELECT*FROM users where id=:id");
    $stmt->bindValue(':id', $id);
// On execute la requête
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}*/

//comparaison login et mdp
if ($user['login'] == $_POST['login'] && $user['password'] == $_POST['password']) {

    header("Location: user.php");
} else {
    echo 'tryy again';
}

?>

