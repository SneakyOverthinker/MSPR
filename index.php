<?php include_once 'includes/header.php'; ?>

    <section class="jumbotron jumbotron-fluid"> <!-- Jumbotron -->
        <div class="container">
            <h1 class="display-4">Bienvenue sur outfits of the day.com </h1>
            <img class="mb-4" src="https://svgsilh.com/svg/1301868.svg" alt="" width="72" height="72">
        </div>
    </section>

    <section id="content">
        <div class="container">

            <div class="row g-4">
            <div class="d-flex align-items-start">

                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link btn-info" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-connexion" aria-selected="true">Connexion</a>
                    <div class="mb-3">
                    <a class="nav-link btn btn-info" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-s'inscrire" aria-selected="false">S'inscrire</a>
                    </div>
                </div>
                <div class="tab-content col-lg-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"
                                   required>
                            </div>
                            <button class="btn btn-lg btn-info btn-block" type="submit">Connexion</button>

                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <form class="form-register" action="user/add-user.php" method="POST">
                            <h1 class="h3 mb-3 font-weight-normal">Créer un profil</h1>
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" id="first_name" name="first_name">
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" placeholder="Prénom" id="last_name" name="last_name">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date de naissance</label>
                                <input type="date" class="form-control" id="birthday" name="birthday">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="exemple@email.com" id="email" name="email">
                            </div>
                            <div class="mb-3">
                            <label class="sr-only">Pseudo</label>
                            <input type="text" id="login" class="form-control" placeholder="Login" name="login"
                                   required
                                   autofocus>
                            </div>

                                <div class="mb-3">
                                <label for="inputPassword" class="sr-only">Mot de passe</label>
                                <input type="password" id="Password" class="form-control" placeholder="Password" name="password"
                                       required>
                            </div>
                            <div class="mb-3">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Repeat Password" name="password1"
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
