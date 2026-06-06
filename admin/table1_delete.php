        <?php
            $username = getenv('DB_USER');
            $password = getenv('DB_PASSWORD');
            $dbname = getenv('DB_NAME');

            // Appel du bloc Header et du Menu
            require ('../header.php');
        ?>
        <main id="haut2">
            <h1>Gestion de nos modèles</h1>
            <a class="btn" href="voitures">
                Retour
                <span></span>
            </a>
        
            <?php
                // recupérer dans l'url l'id de l'album à supprimer
                $num =$_GET['num'];

                $mabd = new PDO('mysql:host=sae203-bd-mpp9yr;dbname=' . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASSWORD'));
                $mabd->query('SET NAMES utf8;');

                // tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
                $req = 'DELETE FROM Voitures WHERE voiture_id='.$num.'';

                // cette ligne sert juste pour le debug. à supprimer quand tout marche correctement  
                //echo $req;
                
                $resultat = $mabd->query($req);

                echo '<h2 class="info">vous venez de supprimer la Ferrari numéro <span>'.$num.'</span> de nos modèles</h2>';
            ?>

        </main>

        <?php
            // Appel du bloc Footer et du Menu
            require ('../footer.php');
        ?>
