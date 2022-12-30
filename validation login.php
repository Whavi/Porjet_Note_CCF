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


if (isset($_POST['soumettre'])) {
    $utilisateur = (isset($_POST['identifiant'])) ? $_POST['identifiant'] :null;
    $password = (isset($_POST['motDePasse'])) ? $_POST['motDePasse'] :null;
    $numen = (isset($_POST['ID_NUMEN'])) ? $_POST['ID_NUMEN']:null;
}

if(!empty($utilisateur)&& !empty($password) && !empty($numen)) {

// $hashDuMotDePasse = password_hash($password, PASSWORD_ARGON2ID);
$sql = "select ID_NUMEN, identifiant, motDePasse from comptes where identifiant= ?" ;
$connection = getConnection();
$instructions = $connection->prepare($sql);
$instructions->bindParam(1, $utilisateur, PDO::PARAM_STR);
$instructions->execute();
$resultat = $instructions->fetchAll() ;


// Récupération ici du hash du mot de passe en provenance de la BDD situé dans $resultat
$hash = $resultat[0]['motDePasse'] ;
// Vérification avec la fonction PHP password_verify
$loginValide = password_verify($password,$hash) ;

if ($loginValide) {
    //echo '<script type="text/javascript">alert("Utilisateur bien loggé"); </script>';  
    header("Location: accueil.html");
    
} else {
    //echo ("<script type='text/javascript'>alert('identifiant ou mot de passe invalide'); </script>"); 
    header("Location: connexion.html");
}
}
?>