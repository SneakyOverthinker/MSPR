<?php include_once '../../includes/header.php'; ?>

<?php $user = getUser($_GET['id']); ?>

    <div class="container">
        <h1> Modifier votre profil<?php echo $user['id']; ?> </h1>

        <form action="assets/user/update-user.php?id=<?php echo $user['id']; ?>" method="post">

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="login" class="form-control" id="name" value="<?php echo $user['login']; ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Prénom</label>
                <input type="text" name="login" class="form-control" id="name" value="<?php echo $user['login']; ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Date de naissance</label>
                <input type="text" name="login" class="form-control" id="name" value="<?php echo $user['login']; ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" id="name" value="<?php echo $user['login']; ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="name" value="<?php echo $user['password']; ?>" required>
            </div>

            <button class="btn btn-success" type="submit">
                Modifier
            </button>
        </form>

    </div>
<?php include_once '../../includes/footer.php' ?>