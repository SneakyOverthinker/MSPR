<?php include_once '../../includes/header.php'; ?>
<?php include_once '../../includes/helpers.php'; ?>
<

<?php $id = $_GET['id'];
$user = getUser($id)?>

    <div class="container">
        <h1> Modifier votre profil<?php echo $user['id']; ?> </h1>



    </div>
<?php include_once '../../includes/footer.php' ?>