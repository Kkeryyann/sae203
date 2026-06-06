        <?php
            $username = getenv('DB_USER');
            $password = getenv('DB_PASSWORD');
            $dbname = getenv('DB_NAME');

            require ('../header.php');
        ?>
        
        <main>
            <a class="btn" id="sticky-parallax-btn" href="designers">
                Retour
                <span></span>
            </a>
            <h1>Modifier un <span>designer</span></h1>

            <?php 
                $num = $_GET['num'];
                $mabd = new PDO('mysql:host=sae203-bd-mpp9yr;dbname=' . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASSWORD'));
                $mabd->query('SET NAMES utf8;');
                $req = "SELECT * FROM Designer WHERE designer_id = '". $num . "'";
                $resultat = $mabd->query($req);
                $album = $resultat->fetch();
            ?>

            <form method="POST" action="table2_update_valide.php" class="block">
                <div id="ajout">
                    <input type="hidden" name="id" value="<?php echo $album['designer_id']; ?>">
                    <input type="hidden" name="modele2" value="<?php echo $album['designer_nom']; ?>">
                    <label for="nom">Nom :</label><input type="text" id="nom" name="nom" maxlength="20" required>
                    <label for="prenom">Prénom :</label><input type="text" id="prenom" name="prenom" maxlength="20" required>
                    <label for="nationalite">Nationalité :</label><input type="text" id="nationalite" name="nationalite" maxlength="20" required>
                </div>
                <input type="submit" value="Modifier">
            </form>
        </main>

        <?php
            require ('../footer.php');
        ?>
