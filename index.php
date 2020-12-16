<?php include_once 'includes/header.php'; ?>

<section class="jumbotron jumbotron-fluid">
    <div class="container">

        <h1 class="display-4">
            <img class="mb-4" src="https://svgsilh.com/svg/1301868.svg" alt="" width="72" height="72">
            <span>Bienvenue sur outfits of the day.com</span>
        </h1>

    </div>
</section>

<section id="content">
    <div class="container">

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card card-body">
                    <form class="form-signin" action="login-action.php" method="POST">
                        <h1 class="h3 mb-3 font-weight-normal">Se connecter</h1>
                        <div class="mb-3">
                            <label class="sr-only">Pseudo</label>
                            <input type="text" id="inputEmail" class="form-control" placeholder="Login" name="login"
                                   required
                                   autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="sr-only">Mot de passe</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                                   name="password"
                                   required>
                        </div>
                        <button class="btn btn-lg btn-info btn-block" type="submit">Connexion</button>

                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body">
                    <form class="form-register" action="user/add-user.php" method="POST">
                        <h1 class="h3 mb-3 font-weight-normal">Créer un profil</h1>
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" placeholder="Nom" id="first_name"
                                   name="first_name">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" placeholder="Prénom" id="last_name"
                                   name="last_name">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date de naissance</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="exemple@email.com" id="email"
                                   name="email">
                        </div>
                        <div class="mb-3">
                            <label class="sr-only">Pseudo</label>
                            <input type="text" id="login" class="form-control" placeholder="Login" name="login"
                                   required
                                   autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="inputPassword" class="sr-only">Mot de passe</label>
                            <input type="password" id="Password" class="form-control" placeholder="Password"
                                   name="password"
                                   required>
                        </div>
                        <div class="mb-3">
                            <input type="password" id="inputPassword" class="form-control"
                                   placeholder="Repeat Password" name="password1"
                                   required>
                        </div>
                        <button class="btn btn-lg btn-info btn-block" type="submit">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<?php require_once 'includes/footer.php' ?>
