<?php
include_once('connect_bdd.sql');

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$adress = $_POST['adress'];
$description = $_POST['description'];

$req = $bdd->prepare('INSERT INTO Utilisateurs(Pseudo, Password, Email, Prenom, Nom, Age, Adresse, Description, Date_de_naissance, Ville, Code_postal, Pays, Sexe, Date_creation, Date_modification)
VALUES(:pseudo, :password, :email, :first_name, :last_name, :age, :adress, :description, :Date_de_naissance, :Ville, :Code_postal, :Pays, :Sexe, :Date_creation, :Date_modification)');

$req->execute(array(
'pseudo' => $pseudo,
'password' => $password,
'email' => $email,
'first_name' => $first_name,
'last_name' => $last_name,
'age' => $age,
'adress' => $adress,
'description' => $description,
'Date_de_naissance' => '1970-01-01',
'Ville' => 'Aucun',
'Code_postal' => 0,
'Pays' => 'Aucun',
'Sexe' => 'A',
'Date_creation' => '1970-01-01',
'Date_modification' => '1970-01-01'
));

header('Location: ../index.php');
?>

