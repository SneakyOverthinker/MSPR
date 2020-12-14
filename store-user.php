//ce n'est qu'une page de traitement
<?php include_once '../includes/helpers.php';


$data = [
    'prenom'       => $_POST['prenom'],
    'nom'       => $_POST['nom'],
    'email'       => $_POST['email'],
    'date_de_naissance'       => $_POST['date_de_naissance'],


];


$dbh = connectDB();


$stmt = $dbh ->prepare('INSERT INTO users (prenom, nom, email, date_de_naissance) VALUES (:prenom, :nom, :email, date_de_naissance)');
$stmt->bindValue(':prenom', $data['prenom']);
$stmt->bindValue(':nom', $data['nom']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':date_de_naissance', $data['date_de_naissance']);
$stmt->execute();

$id = $dbh->lastInsertId();
header('Location: ../');

header("Location: ../users.php?id=$id");