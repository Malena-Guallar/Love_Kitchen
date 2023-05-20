<?php
try {
$db = new PDO(
    'mysql:host=localhost;dbname=love_kitchen;charset=utf8',
    'root',
    'root',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
); }
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$sqlQuery2 = 'SELECT * FROM users';
$usersStatement = $db->prepare($sqlQuery2);
$usersStatement->execute();
$users=$usersStatement->fetchAll();


$sqlQuery1 = 'SELECT * FROM recipes';
$recipesStatement = $db->prepare($sqlQuery1);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

$sqlQuery3 = 'INSERT INTO recipes(title, recipe, author) VALUES (:title, :recipe, :author)';
$insertRecipe = $db->prepare($sqlQuery3);



?>

