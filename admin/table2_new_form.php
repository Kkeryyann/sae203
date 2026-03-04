        <?php
            // Appel du bloc Header et du Menu
            require ('../header.php');
        ?>

        <main id="haut2">
            <a class="btn" class="text" id="sticky-parallax-btn" href="designers">
                Retour
                <span></span>
            </a>
            <h1>ajouter un <span>designer</span></h1>

            <?php
                $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'un0mdp1trotro2dur3a4Touver)');
                $mabd->query('SET NAMES utf8;');
                $req = "SELECT * FROM Designer";
                $resultat = $mabd->query($req);
                $album = $resultat->fetch();
            ?>

            <form method="POST" action="table2_new_valide.php" class="block">
                <div id="ajout">
                    <input type="hidden" name="id" value="<?php echo $album['designer_id']; ?>">
                    <input type="hidden" name="id2" value="<?php echo $album['designer_nom']; ?>">
                    <label for="nom">Nom :</label><input type="text" id="nom" name="nom" maxlength="20" required>
                    <label for="prenom">Prénom :</label><input type="text" id="prenom" name="prenom" maxlength="20" required>
                    <label for="nationalite">Nationalité :</label><input type="text" id="nationalite" name="nationalite" maxlength="20" required>
                </div>
                <input type="submit" value="Sauvegarder">
            </form>
    