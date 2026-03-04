    <?php
        require ('../header.php');
    ?>

    <main id="haut2">
        
        <?php
            ?>

        <a class="btn" href="designers">
            Retour
            <span></span>
        </a>

        <?php
            $id=$_POST['id'];
            $modele2=$_POST['modele2'];        
            $nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$nationalite=$_POST['nationalite'];

            $mabd = new PDO('mysql:host=sae203-bd-mpp9yr;dbname=sae203Base;charset=UTF8;', 'sae203User', 'X4bRPsfIJn7A7yJOadRX');
            $mabd->query('SET NAMES utf8;');
            $req = 'UPDATE Designer SET designer_nom="'.$nom.'", designer_prenom="'.$prenom.'", designer_nationalite="'.$nationalite.'" WHERE designer_id='.$id;

            $resultat = $mabd->query($req);

            if ($resultat === false) {
                // Si une erreur s'est produite lors de l'exécution de la requête
                echo "Erreur lors de l'exécution de votre requête : " . $mabd->error;
            } else {
                // Si la requête s'est exécutée avec succès
                echo '<h1 class="modif2">Les informations sur <br><span>'.$nom.'</span> ('.$modele2.')<br>ont bien étés modifiées</h1>';
            }
        ?>

        <div class="hr2">
            <hr>
            <hr>
        </div>
        <ul class="ul_admin">
            <li>
    
                <?php 
                    echo '<a class="btn2" href="table2_update_form.php?num='.$id.'">
                        Recommencer
                        <span></span>
                    </a>'
                ?>

            </li>
        </ul>

    </main>

    <?php
        require ('../footer.php');
    ?>