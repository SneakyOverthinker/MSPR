<?php require_once 'includes/header.php'; ?>

<?php function getUser($login)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users where login = :login");
    $stmt->bindValue(':login', $login);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

$username = $_SESSION['user']['login'];
$user = getUser($username);


?>

    <div class="container">
    <h1>Modifier votre profile <?php echo $user['id']; ?> </h1>


    <div class="card-body">
        <h5 class="card-title">Description de votre profil</h5>
        <input class="form-control" name="comment" id="comment" placeholder="Commentaire" required>
        <button href="#" class="btn btn-info" id="my-button">Publier</button>
    </div>

    <div class="col-sm">
    <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
            <h1 class="card-title">Utilisateur
                : <?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></h1>
            <p class="card-text">Date de naissance : <?php echo $user['birthday']; ?></p>
            <p class="card-text">Email : <?php echo $user['email']; ?></p>
            <p class="card-text">Pseudo: <?php echo $user['login']; ?></p>


            </div>
        </div>
    </div>

    <a href="edit-user.php?id=<?php echo $user['id']; ?>" class="btn btn-info">Modifier</a>
    <a href="user/delete-user.php?id=<?php echo $user['id']; ?>" class="btn btn-info">Supprimer</a>


<?php require_once 'includes/footer.php' ?>