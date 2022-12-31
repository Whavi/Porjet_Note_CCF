<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styleprof.css">
    <title>Site vitrine</title>
</head>

<body>
    <!-- Barre de nav -->
    <nav>
        <div class="onglets">
            <a href="Accueil.html">Saisie de note</a>
            <a href="#contact">Contact</a>
            <a href="formulaire.html">Profil</a>
            <a href="connexion.html">Déconnexion</a>
        </div>
    </nav>
    <!-- L'intérieur de page que je dois faire -->
    <form action="notes.php" method="post">
    <header>
        <h4>Bienvenue sur ce site pour inscrire vos données, </h4>
        <?php 
            echo $_SESSION['utilisateur']
            ?>
        <button><a href="formulaire.html">Vous pouvez vous déconnecter ici !</a></button>

    </header>
    <table class="table-style">

        <thead>
            <tr>
                <th>BTS</th>
                <th>Nom/Prenom</th>
                <th>CCF</th>
                <th>Note</th>
                <th>Coefficient</th>
                <th>Date</th>
                <th>Appreciation</th>
            </tr>
        </thead>


        <tbody>
            <tr>

                <td>
                    <select name="ID_BTS">
                        <option value="">Veuillez choisir un BTS</option>
                        <option value="SIOSISR">Services informatiques aux organisations SISR </option>
                        <option value="SIOSLAM">Services informatiques aux organisations SLAM </option>
                        <option value="CI">Commerce international </option>
                        <option value="COM">Communication </option>
                        <option value="CG">Comptabilité et Gestion </option>
                        <option value="NDRC">Négociation Digitalisation de la relation client </option>
                        <option value="PI">Professions immobilières</option>
                        <option value="SAM">Support à l'action managériale</option>
                        <option value="TOU">Tourisme</option>
                    </select>

                </td>

                <td>
                    <select name="NOM_PRENOM">
                        <option value="">Veuillez choisir un élève</option>
                        <option value="ABIRAM">ABIRAM Raveendran </option>
                        <option value="ANGLOMA">ANGLOMA Wesley </option>
                        <option value="ANZALA">ANZALA Emeric </option>
                        <option value="ASTASIE">ASTASIE Mounia</option>
                        <option value="BAZES">BAZES Kévin</option>
                        <option value="CISSE">CISSE Adam Bacongo</option>
                        <option value="DAVID">DAVID Tom</option>
                        <option value="DOS SANTOS">DOS SANTOS David</option>
                        <option value="DRAME">DRAME Mouhamadou</option>
                        <option value="EL BANA">EL BANA Ashraf</option>
                        <option value="EL HAFSI">EL HAFSI Nizar</option>
                        <option value="GOUBIN">GOUBIN Sylvain</option>
                        <option value="GUERIN">GUERIN Nicolas</option>
                        <option value="HASNAOUI">HASNAOUI Nassim</option>
                        <option value="HIAUMET">HIAUMET Mattéo</option>
                        <option value="INDRALINGAM">INDRALINGAM Inthusan</option>
                        <option value="LA SALA MILAN">LA SALA Milan</option>
                        <option value="MANE">MANE Malang</option>
                        <option value="MARTINS">MARTINS Guillaume</option>
                        <option value="MATHIEU">MATHIEU Emma</option>
                        <option value="MENDES">MENDES Joaquim</option>
                        <option value="MESINA">MESINA Cristian</option>
                        <option value="NADJI">NADJI Rayan</option>
                        <option value="NAZIR">NAZIR Toycan</option>
                        <option value="RIHANE">RIHANE Inès</option>
                        <option value="SARMIENTO">SARMIENTO Nijel</option>
                        <option value="SAVOIE">SAVOIE Adrien</option>
                        <option value="YAGOUBI">YAGOUBI Nabil</option>
                        <option value="YANGUI">YANGUI Amani</option>
                        <option value="YE">YE Stéphane</option>
                        <option value="ZHANG">ZHANG Christophe</option>
                    </select> 
                </td>
               
                <td>
                <select name="CCF">
                        <option value="">Choisissez l'épreuve</option>
                        <option value="E4">E4: Support et mise à disposition de services informatiques </option>
                        <option value="E5">E5: Administration des systèmes et des réseaux </option>
                        <option value="E6">E6: Conception et développement d'applications </option>
                        <option value="EF4">EF4: Engagement étudiant</option>
                </select>
                </td>

                <td><input type="number" name="Note" min="1" max="100"></td>
                <td>
                    <input type="number" name="Coefficient" min="1" max="100">
                </td>

                <td>
                    <input type="date" name=date>
                </td>

                <td>
                    <input type="text" name="Appreciation">
                </td>
            </tr>

        </tbody>

    </table>
    <br>
    <div class="int">
        <input name ="soumettre" type="submit" value="Envoyer">
    </div>
    <br>
    <br>
    </form>



    <!-- Footer -->
    <footer>
        <h1>Nos services</h1>

        <div class="services">

            <div class="service">
                <h3>Nos Produits</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quo et nam optio doloremque sint
                    hic dicta, animi ad recusandae ut sit perferendis suscipit praesentium sunt rem ducimus eveniet
                    earum!</p>
            </div>

            <div class="service">
                <h3>Légal Sites Internet</h3>
                <p>Mentions légales et conditions générales d'utilisation de nos sites internet Politique de
                    confidentialité Utilisation des cookies</p>
            </div>

            <div class="service">
                <h3>Légal produits</h3>
                <p>Conditions générales d'utilisation et de vente de nos logiciels Politique de protection des données
                    personnelles</p>
            </div>

        </div>

        <p id="contact">Contact : 06 12 34 56 78 | &copy; 2022 Projet</p>
    </footer>
</body>

</html>
