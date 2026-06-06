        <?php
            $username = getenv('DB_USER');
            $password = getenv('DB_PASSWORD');
            $dbname = getenv('DB_NAME');

            // Appel du bloc Header et du Menu
            require ('../header.php');
        ?>

        <main id="less">
            <a class="btn" class="text" id="sticky-parallax-btn" href="voitures">
                Retour
                <span></span>
            </a>
            <h1>ajouter une <span>ferrari</span></h1>

            <?php
                $mabd = new PDO('mysql:host=sae203-bd-mpp9yr;dbname=' . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASSWORD'));
                $mabd->query('SET NAMES utf8;');
                $req = "SELECT * FROM Voitures";
                $resultat = $mabd->query($req);
                $album = $resultat->fetch();
            ?>

            <form method="POST" action="table1_new_valide.php" enctype="multipart/form-data">
                <div class="block">
                    <input type="hidden" name="id" value="<?php echo $album['voiture_id']; ?>">
                    <input type="hidden" name="modele2" value="<?php echo $album['voiture_modele']; ?>">
                    <div>
                        <label>Modèle<span>*</span> :</label><input type="text" name="modele" placeholder="FXX K" maxlength="40" required>
                    </div>
                    <div>
                        <label>Année de sortie<span>*</span> :</label><input type="text" name="annee" placeholder="2014" pattern="\d{4}" title="Entrez une année valide (4 chiffres)" maxlength="4" required>
                    </div>
                    <div>
                        <label>Moteur<span>*</span> :</label><input type="text" name="moteur" placeholder="V12" maxlength="20" required>
                    </div>
                    <div>
                        <label>Puissance<span>*</span> :</label><input type="text" name="puissance" placeholder="1050 ch" maxlength="6" required>
                    </div>
                    <div>
                        <label>Couple<span>*</span> :</label><input type="text" name="couple" placeholder="900 Nm" maxlength="6" required>
                    </div>
                    <div>
                        <label>Catégorie<span>*</span> :</label><input type="text" name="categorie" placeholder="Hypercar" maxlength="15" required>
                    </div>
                    <div>
                        <label>Nombre de places<span>*</span> :</label><input type="text" name="nbplaces" placeholder="2" pattern="\d{1}" title="Entrez un nombre de places valide (1 chiffre)" maxlength="1" required>
                    </div>
                    <div>
                        <label>Prix<span>*</span> :</label><input type="text" name="prix" placeholder="2 400 000 €" maxlength="15" required>
                    </div>
                    <div>
                        <label for="photo">Photo<span>*</span> :</label><input type="file" id="photo" name="photo" required>
                    </div>
                    <div>
                        <label for="designer">Nom du designer<span>*</span> :</label>
                        <select id="designer" name="designer">

                            <?php
                                $mabd = new PDO('mysql:host=sae203-bd-mpp9yr;dbname=sae203Base;charset=UTF8;', 'sae203User', 'X4bRPsfIJn7A7yJOadRX');
                                $mabd->query('SET NAMES utf8;');
                                $req = "SELECT * FROM Designer";
                                $resultat = $mabd->query($req);

                                foreach ($resultat as $value) {
                                    echo '<option value="'.$value['designer_id'].'">'.$value['designer_nom'].'</option>';
                                }
                            ?>

                        </select>
                    </div>
                    <input type="submit" value="Sauvegarder">
                    <p><span>*</span>champs obligatoires</p>
                </div>
            </form>
        </main>

        <?php
            require ('../footer.php');
        ?>
            
