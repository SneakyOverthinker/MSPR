<?php include_once 'includes/header.php'; ?>

<?php $user = getUser($_POST['id']); ?>

<div class="container">
    <h1> Modifier votre profil<?php echo $user['id']; ?> </h1>

    <form action="/user/update-user.php?id=<?php echo $user['id']; ?>" method="post">

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" placeholder="Nom" id="first_name" name="first_name"
                   value="<?php echo $user['first_name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="name">Prénom</label>
            <input type="text" class="form-control" placeholder="Prénom" id="last_name" name="last_name"
                   value="<?php echo $user['last_name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="name">Date de naissance</label>
            <input type="date" class="form-control" id="birthday" name="birthday"
                   value="<?php echo $user['birthday']; ?>" required>
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" placeholder="exemple@email.com" id="email" name="email"
                   value="<?php echo $user['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="name">Pseudo</label>
            <input type="text" id="login" class="form-control" placeholder="Login" name="login"
                   value="<?php echo $user['login']; ?>" required>
        </div>
        <div class="form-group">
            <label for="name">Mot de passe</label>
            <input type="password" id="Password" class="form-control" placeholder="Password" name="password"
                   value="<?php echo $user['password']; ?>" required>

            <button class="btn btn-info" type="submit">
                Valider la modification
            </button>
    </form>

</div>
<?php include_once 'includes/footer.php' ?>
