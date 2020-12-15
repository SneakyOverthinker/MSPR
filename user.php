<?php require_once 'includes/header.php'; ?>

<?php $user = getUser($_GET['id']); ?>

    <div class="container">
        <h1>Modifier votre profil <?php echo $user['id']; ?> </h1>

        <form action=".php?id=<?php echo $user['id']; ?>" method="post">

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $user['first_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Prénom</label>
                <input type="text" name="last_name" class="form-control" id="last_name" value="<?php echo $user['last_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Date de naissance</label>
                <input type="text" name="birthday" class="form-control" id="birthday" value="<?php echo $user['date']; ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $user['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Pseudo</label>
                <input type="text" name="login" class="form-control" id="login" value="<?php echo $user['login']; ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" value="<?php echo $user['password']; ?>" required>
            </div>

            <button class="btn btn-success" type="submit">
                Modifier
            </button>
        </form>

    </div>
<section class="container">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Poster votre tenue du jour</h5>
            <input class="form-control" name="comment" id="comment" placeholder="Commentaire" required>
            <button href="#" class="btn btn-primary" id="my-button">Afficher votre publication</button>
        </div>
    </div>
</div>
    </section>
<?php require_once 'includes/footer.php' ?>