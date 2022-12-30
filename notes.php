<?php
require "./connectionBDD.php" ;


$sql = "SELECT e.NOM, e.PRENOM, e.OPTION_SIO FROM eleves e" ;
$connection = getConnection();
$instructions = $connection->prepare($sql);
$instructions->execute();
$resultat = $instructions->fetchAll() ;

echo "
<html>
    <head>
       <meta charset='utf-8'>
        <link rel='stylesheet' href='note.css' media='screen' type='text/css' />
        <title> Notes </title>
    </head>";
echo "<body>";
echo "<table>";
echo "<tr>";
echo "<td>Nom Eleves</td>";
echo "<td>Prenom Eleve</td>";
echo "<td>Option Eleve</td>";
echo "</tr>";
foreach ($resultat as $key => $value) { 

    foreach ($value as $key2 => $value2) {
        if ($key2 == "NOM"){
            $NomEleves = $value2;
            
        } 
        if ($key2 == "PRENOM"){
            $PrenomEleves = $value2;
           
        }
        if ($key2 == "OPTION_SIO"){
            $OptionEleves = $value2;
            
        }

    }
    echo "<tr>";
    echo "<td>$NomEleves</td>";
    echo "<td>$PrenomEleves</td>";
    echo "<td>$OptionEleves</td>";
    echo "</tr>";
    

 }
 echo "</table>";
 echo "</body>";