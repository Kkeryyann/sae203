        <?php
            $username = getenv('DB_USER');
            $password = getenv('DB_PASSWORD');
            $dbname = getenv('DB_NAME');

            // Appel du bloc Header et du Menu
            require ('header.php');
        ?>

        <main>
            <a class="btn text" id="sticky-parallax-btn" href="index.php">
                Retour
                <span></span>
            </a>
            <button class="stp" title="Haut de page">
                <svg class="svgIcon" viewBox="0 0 384 512">
                    <path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"></path>
                </svg>
            </button>
            <ul class="ul_admin">
                <li>
                    <a class="btn text" href="form_recherche.php">
                        effectuer une nouvelle recherche
                        <span></span>
                    </a>
                </li>
            </ul>

            <?php
                if ( (empty($_GET['recherche'])) ) {
                    header('Location: form_recherche.php');
                }
    
                $recherche = $_GET['recherche'];
                $recherche_verif = htmlspecialchars(strip_tags($recherche), ENT_QUOTES, 'UTF-8');
                if($recherche_verif==null) {
                    header('Location: form_recherche.php?erreur=1');
                } 
                echo '<h1>Résultats pour <span>'.$recherche_verif.'</span></h1>'."\n";

                $texteAchercher =$_GET['recherche'];

                $mabd = new PDO('mysql:host=sae203-bd-mpp9yr;dbname=' . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASSWORD'));
                $mabd->query('SET NAMES utf8;');
                //$req= 'SELECT * FROM Voitures WHERE voiture_modele LIKE "%'.$texteAchercher .'%" ';
               $req = 'SELECT Voitures.*, Designer.* 
                        FROM Voitures 
                        INNER JOIN Designer ON Voitures._designer_id = Designer.designer_id
                        WHERE Voitures.voiture_modele LIKE :search
                        OR Voitures.voiture_annee LIKE :search
                        OR Voitures.type_moteur LIKE :search
                        OR Voitures.nb_chevaux LIKE :search
                        OR Voitures.nb_couple LIKE :search
                        OR Voitures.nb_place LIKE :search
                        OR Voitures.voiture_prix LIKE :search
                        OR Designer.designer_nom LIKE :search
                        OR Designer.designer_prenom LIKE :search
                        OR Designer.designer_nationalite LIKE :search
                        OR Voitures.type_nom LIKE :search';
                
                $stmt = $mabd->prepare($req);
                $stmt->execute([':search' => '%' . $recherche_verif . '%']);
                $resultat = $stmt->fetchAll();
                
                echo '<div class="gconteneur">';
                    foreach ($resultat as $value) {
                        echo '<div class="card">' ;
                        echo '<img src="images/uploads/' . $value['voiture_photo'] . '" alt="Ferrari '.$value['voiture_modele'].'">';
                        echo '<div class="card_content"><h2>FERRARI <span>'. $value['voiture_modele'] . '</span></h2><br>';
                        echo '<h2 class="annee">('. $value['voiture_annee'] . ')</h2>';
                        echo '<div class="texte"><p class="card_description1">Moteur : '. $value['type_moteur'] . '<br>';
                        echo 'Puissance : ' . $value['nb_chevaux'] . ' <br>';
                        echo 'Couple : ' . $value['nb_couple'] . '<br>'; 
                        echo 'Catégorie : ' . $value['type_nom'] . '<br>';
                        echo 'Nombre de places : ' . $value['nb_place'] . '<br>';
                        echo 'Prix : ' . $value['voiture_prix'] . '</p>';

                        echo '<p class="card_description2"><span>Designer<br></span>';
                        echo 'Nom : ' . $value['designer_nom'] . '<br>';
                        echo 'Prénom : ' . $value['designer_prenom'] . '<br>';
                        echo 'Nationalité : ' . $value['designer_nationalite'] . '<br>';
                        echo '</div></div></div>';
                    }
                echo '</div>';
            ?>

        </main>

        <?php
            // Appel du bloc Footer et du Menu
            require ('footer.php');
        ?>
