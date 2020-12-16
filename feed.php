<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<section class="py-5">
    <div class="container">

        <h2>Votre fil d'actualité</h2>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <input class="form-control" type="text" name="post" id="post" placeholder="Publication" required>
            </div>
            <div class="col mb-3">
                <button class="btn btn-info" id="my-button">Publier l</button>
            </div>
        </div>
            <p id="text" class="mt-3"></p>

        </div>
</section>


<?php require_once 'includes/footer.php' ?>
