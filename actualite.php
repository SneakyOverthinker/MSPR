<?php include_once 'includes/header.php';
include_once 'includes/helpers.php'; ?>

<?php    session_start();
if(!isset($_SESSION['user'])){
    header ("location:index.php");
}
?>

<?php require_once 'includes/footer.php' ?>
