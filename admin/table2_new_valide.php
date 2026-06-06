    <?php
	    $username = getenv('DB_USER');
        $password = getenv('DB_PASSWORD');
        $dbname = getenv('DB_NAME');

        // Appel du bloc Header et du Menu
        require ('../header.php');
    ?>

    <main id="haut">

        <?php
            $nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
            echo '<h1 class="modif"><span>'.$prenom.'&nbsp;'.$nom.'</span> a bien été ajoutée à nos designers</h1>';
        ?>

        <a class="btn" href="designers">
            Retour
            <span></span>
        </a>

		<?php
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$nationalite=$_POST['nationalite'];

            $mabd = new PDO('mysql:host=sae203-bd-mpp9yr;dbname=' . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASSWORD'));
            $mabd->query('SET NAMES utf8;');
			$req = 'INSERT INTO Designer(designer_nom,designer_prenom,designer_nationalite) 
            VALUES ("'.$nom.'","'.$prenom.'","'.$nationalite.'")';
			//echo $req;
            $resultat = $mabd->query($req);
		?>

    </main>

    <?php
        require ('../footer.php');
    ?>
