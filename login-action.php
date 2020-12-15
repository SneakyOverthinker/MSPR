<?php
//réccu données via $_POST

function getUser() {
    $dbh = connectDB();
    $stmt = $dbh->query( "SELECT * FROM users");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


$user = getUser();

if ($user['login']== $_POST['login'] AND  $user['password']== $_POST['password'])
{
    session_start();
    $_SESSION['user']=$user;
    header("Location:index.php");
    //index.client
}

else { echo 'try again';}

?>

