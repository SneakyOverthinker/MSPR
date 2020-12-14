<?php

// Connexion à la base de donnée dbh
function connectDB()
{
    return new PDO('mysql:host=localhost;dbname=MSPR-php', 'root', 'root',
        [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
    );
}
// We get the users from the DBH
function getUsers()
{
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // many to show
}