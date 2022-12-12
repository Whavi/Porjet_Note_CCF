<?php
session_start();
//print_r($_SESSION);
if ( isset($_SESSION['utilisateur']) && isset($_SESSION['estValide'])
&& $_SESSION['estValide'] == true )
{
header("Location: Accueil_prof.html");
}
else {
echo "Les brigands cherchant à accéder à des ressources protégées <BR>";
echo "Seront sévèrement chatiés <BR>";
echo 'Soyez raisonnables et identifiez vous ! <a href="formulaire.html"> Veuillez vous inscrire </a>';
}

//session_destroy();

?>