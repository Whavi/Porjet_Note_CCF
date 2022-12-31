<?php
require "./connectionBDD.php" ;

if (isset($_POST['soumettre'])){
    $BTS = (isset($_POST['ID_BTS'])) ? $_POST['ID_BTS'] :null ;
    $Nom_prenom = (isset($_POST['NOM_PRENOM'])) ? $_POST['NOM_PRENOM'] :null;
    $CCF = (isset($_POST['CCF'])) ? $_POST['CCF'] :null;
    $Note = (isset($_POST['Note'])) ? $_POST['Note'] :null ;
    $Coefficient = (isset($_POST['Coefficient'])) ? $_POST['Coefficient'] :null;
    $date = (isset($_POST['date'])) ? $_POST['date'] :null;
    $Appreciation = (isset($_POST['Appreciation'])) ? $_POST['Appreciation']:null;
}
if(!empty($BTS)&&!empty($Nom_prenom)&&!empty($CCF) &&!empty($Note) &&!empty($Coefficient)&&!empty($date)&&!empty($Appreciation)){

    $connection = getConnection();
    $stat = $connection->prepare("SELECT e.ID FROM eleves e WHERE e.NOM = :NOM");
     $stat->bindParam(':NOM', $Nom_prenom, PDO::PARAM_STR);
     $stat->execute() ;
     $resultat = $stat->fetchAll();

    $Candidat = $resultat[0]["ID"];

    $statement = $connection->prepare("INSERT INTO notes ( FK_ID_CANDIDAT, CCF, NOTE_, COEFF, DATE_EVAL, APPRECIATION) VALUES ( :ID_CANDIDAT, :CCF, :Note_, :coeff, :date_eval, :appreciation)");
    $statement->bindParam(':ID_CANDIDAT', $Candidat, PDO::PARAM_STR);    
    $statement->bindParam(':CCF', $CCF, PDO::PARAM_STR);
    $statement->bindParam(':Note_', $Note, PDO::PARAM_STR);
    $statement->bindParam(':coeff', $Coefficient, PDO::PARAM_STR);
    $statement->bindParam(':date_eval', $date, PDO::PARAM_STR);
    $statement->bindParam(':appreciation', $Appreciation, PDO::PARAM_STR);
    $statement->execute();
    $resultat = $statement->fetchAll();
} 

else{

    echo '<script type="text/javascript">alert("Vous devez remplir tous les champs"); </script>';
}