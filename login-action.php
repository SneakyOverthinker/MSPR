<?php

include_once 'includes/header.php';
//récu données via $_POST

$user = getUser($_POST['login']);

$_SESSION['user'] = $user['login'];


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

