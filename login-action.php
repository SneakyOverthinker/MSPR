<?php
//réccu données via $_POST
include_once 'includes/helpers.php';
function getAdmin() {
    $dbh = connectDB();
    $stmt = $dbh->query( "SELECT * FROM admin");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


$admin = getAdmin();

if ($admin['email']== $_POST['email'] AND  $admin['password']== $_POST['password'])
{
    session_start();
    $_SESSION['admin']=$admin;
    header("Location:index.php");
    //index.client
}

else { echo 'try again';}

?>

