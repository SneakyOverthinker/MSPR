<?php include_once 'includes/helpers.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <title>outfits of the day</title>

    <div class="container">
    </div>


    <div class="jumbotron jumbotron-fluid"> <!-- Jumbotron -->
        <div class="container">
            <h1 class="display-4">Bienvenue sur outfits of the day.com </h1>
            <img class="mb-4" src="https://svgsilh.com/svg/1301868.svg" alt="" width="72" height="72">
        </div>
    </div>


    <div class="container">

        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-login-tab" data-toggle="pill" href="#v-pills-login" role="tab"
                       aria-controls="v-pills-login" aria-selected="true">Connexion</a>
                    <a class="nav-link" id="v-pills-signup-tab" data-toggle="pill" href="#v-pills-signup" role="tab"
                       aria-controls="v-pills-signup" aria-selected="false">Inscription</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-login" role="tabpanel"
                         aria-labelledby="v-pills-login-tab">

                        <form class="form-signin" action="assets/session.php">
                            <h1 class="h3 mb-3 font-weight-normal">Se connecter</h1>
                            <label class="sr-only">Connexion</label>
                            <input type="text" id="inputEmail" class="form-control" placeholder="login" name="login"
                                   required
                                   autofocus>
                            <label class="sr-only">Mot de passe</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"
                                   required>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
                        </form>

                    </div>
                    <div class="tab-pane fade" id="v-pills-signup" role="tabpanel"
                         aria-labelledby="v-pills-signup-tab">
                        <form class="form-signup" action="assets/user/add-user.php" >
                            <h1 class="h3 mb-3 font-weight-normal">Créer un profil</h1>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nom</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Prénom</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Date de naissance</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <label for="inputEmail" class="sr-only">Connexion</label>
                            <input type="text" id="inputEmail" class="form-control" placeholder="login" name="newlogin"
                                   required
                                   autofocus>
                            <label for="inputPassword" class="sr-only">Mot de passe</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="newpassword"
                                   required>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Repeat Password" name="password1"
                                   required>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>



    <?php include_once 'includes/footer.php' ?>
