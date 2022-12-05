<?php
require "./connectionBDD.php" ;
// Si il y a une entrée 'soumettre' comme clef dans la variable superglobale $_POST
// alors on valorise $utilisateur à la valeur correspondante à la clef identifiant
// si elle existe et à null sinon
// Pareil pour $password
// Autrement dit: si l'utilisateur a entré du texte pour le champ de formulaire
// ce texte va dans la variable utilisateur
// Et si il a saisi quelque chose dans le champ motDePasse ce texte va dans le
// variable $password

if (isset($_POST['soumettre'])){
    $nom = (isset($_POST['NOM'])) ? $_POST['NOM'] :null ;
    $prenom = (isset($_POST['PRENOM'])) ? $_POST['PRENOM'] :null;
    $tel = (isset($_POST['tel'])) ? $_POST['tel'] :null ;
    $utilisateur = (isset($_POST['identifiant'])) ? $_POST['identifiant'] :null;
    $password = (isset($_POST['motDePasse'])) ? $_POST['motDePasse'] :null;
    $numen = (isset($_POST['ID_NUMEN'])) ? $_POST['ID_NUMEN']:null;
    $mail = (isset($_POST['mail'])) ? $_POST['mail']:null;
    print_r($_POST) ;
}

if(!empty($utilisateur)&&!empty($password)&&!empty($numen)){

// hachage du mot de passe avec la fonction password_hash PHP et
// l'algorithme le plus fort PASSWORD_ARGON2ID
$hashDuMotDePasse = password_hash($password, PASSWORD_ARGON2ID);

$connection = getConnection();
$statement = $connection->prepare("INSERT INTO comptes(identifiant,motDePasse,ID_NUMEN, mail, nom, prenom, tel) VALUES(:identifiant,:motDePasse,:ID_NUMEN,:mail,:nom,:prenom,:tel)");

$statement->bindParam(':nom', $nom, PDO::PARAM_STR);
$statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$statement->bindParam(':tel', $tel, PDO::PARAM_STR);
$statement->bindParam(':identifiant', $utilisateur, PDO::PARAM_STR);
$statement->bindParam(':motDePasse', $hashDuMotDePasse, PDO::PARAM_STR);
$statement->bindParam(':ID_NUMEN', $numen, PDO::PARAM_STR);
$statement->bindParam(':mail', $mail, PDO::PARAM_STR);

$statement->execute() ;

echo '<script type="text/javascript">alert("Données enregistrées avec succès"); </script>';  
header("Location: connexion.html");
}

else
{
    echo '<script type="text/javascript">alert("Vous devez remplir tous les champs"); </script>';
    }
