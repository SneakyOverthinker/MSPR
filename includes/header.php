<?php require_once 'includes/helpers.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Outfits of the day</title>
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">O.F.D.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="user.php?id=<?php echo $_GET['$id']; ?>">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../actualite.php">Fil d'actualité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Favoris</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout-action.php">Déconnexion</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>

