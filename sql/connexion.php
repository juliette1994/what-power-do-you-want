<?php
    include_once('connect_bdd.sql');
    
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $req = $bdd->prepare('SELECT * FROM Utilisateurs WHERE Pseudo = :pseudo && Password = :password');
    $req->execute(array(
    'pseudo' => $pseudo,
    'password' => $password
    ));

    if ($data = $req->fetch())
    {
       session_start();
       $_SESSION['id'] = $data['ID'];
       $_SESSION['pseudo'] = $data['Pseudo'];
       $_SESSION['age'] = $data['Age'];
       $_SESSION['Nom'] = $data['Nom'];
       $_SESSION['Prenom'] = $data['Prenom'];
       $_SESSION['Date_de_naissance'] = $data['Date_de_naissance'];
       $_SESSION['Ville'] = $data['Ville'];
       $_SESSION['Adresse'] = $data['Adresse'];
       $_SESSION['Code_postal'] = $data['Code_postal'];
       $_SESSION['Pays'] = $data['Pays'];
       $_SESSION['Sexe'] = $data['Sexe'];
       $_SESSION['Role'] = $data['Role'];
       $_SESSION['Date_creation'] = $data['Date_creation'];
       $_SESSION['Date_modification'] = $data['Date_modification'];
       $_SESSION['Description'] = $data['Description'];
       $_SESSION['Email'] = $data['Email'];
       $_SESSION['Password'] = $data['Password'];
       header('Location: ../Files/basket.php');
    }
    else
    {
	echo 'Pseudo ou mot de passe incorrect';
	header('Location: ../index.php');
    }
?>