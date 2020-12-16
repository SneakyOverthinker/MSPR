<?php require_once 'includes/header.php';

$login = $_SESSION['user'];
$user = getUser($login);
?>

    <section>
        <div class="container">
            <h1 class="h1">Modifier le profil <?php echo $user['id']; ?> </h1>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="comment">Description de votre profil</label>
                        <input class="form-control" name="comment" id="comment" placeholder="Commentaire" required>
                    </div>
                    <button href="#" class="btn btn-info" id="my-button">Publier</button>
                </div>
            </div>

            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h1 class="card-title">
                        Utilisateur: <?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></h1>
                    <p class="card-text">Date de naissance : <?php echo $user['birthday']; ?></p>
                    <p class="card-text">Email : <?php echo $user['email']; ?></p>
                    <p class="card-text">Pseudo: <?php echo $user['login']; ?></p>
                </div>
            </div>

            <a href="edit-user.php?id=<?php echo $user['id']; ?>" class="btn btn-info">Modifier</a>
            <a href="user/delete-user.php?id=<?php echo $user['id']; ?>" class="btn btn-info">Supprimer</a>
        </div>
    </section>

<?php require_once 'includes/footer.php' ?>