<?php
//réccu données via $_POST
include_once 'includes/helpers.php';
function getUser() {
    $dbh = connectDB();
    $stmt = $dbh->query( "SELECT * FROM user");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


$user = getUser();

if ($user['email']== $_POST['email'] AND  $user['password']== $_POST['password'])
{
    session_start();
    $_SESSION['admin']=$user;
    header("Location:index.php");
    //index.client
}

else { echo 'try again';}

?>

