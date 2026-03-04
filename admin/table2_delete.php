        <?php
            // Appel du bloc Header et du Menu
            require ('../header.php');
        ?>

        <main id="haut2">
            <h1>Gestion de nos modèles</h1>
            <a class="btn" href="designers">
                Retour
                <span></span>
            </a>
        
            <?php
                // recupérer dans l'url l'id de l'album à supprimer
                $num = $_GET['num'];

                $mabd = new PDO('mysql:host=sae203-bd-mpp9yr;dbname=sae203Base;charset=UTF8;', 'sae203User', 'X4bRPsfIJn7A7yJOadRX');
                $mabd->query('SET NAMES utf8;');

                // tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
                $req = 'DELETE FROM Designer WHERE designer_id='.$num.'';

                // cette ligne sert juste pour le debug. à supprimer quand tout marche correctement  
                //echo $req;
                
                $resultat = $mabd->query($req);

                echo '<h2 class="info">vous venez de retirer le Designer numéro <span>'.$num.'</span> de nos designers</h2>';
            ?>

        </main>

        <?php
            // Appel du bloc Footer et du Menu
            require ('../footer.php');
        ?>