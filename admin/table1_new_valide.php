    <?php
        // Appel du bloc Header et du Menu
        require ('../header.php');
    ?>

    <main id="haut">

        <?php
            $modele2=$_POST['modele2'];
            $modele=$_POST['modele'];
            echo '<h1 class="modif">La ferrari <span>'.$modele.'</span> a bien été ajoutée à nos modèles</h1>';
        ?>

        <a class="btn" href="voitures">
            Retour
            <span></span>
        </a>

		<?php
			$modele=$_POST['modele'];
			$annee=$_POST['annee'];
			$moteur=$_POST['moteur'];
			$puissance=$_POST['puissance'];
			$couple=$_POST['couple'];
			$categorie=$_POST['categorie'];
			$nb_place=$_POST['nbplaces'];
			$prix=$_POST['prix'];
			$numdesigner=$_POST['designer'];

            $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'un0mdp1trotro2dur3a4Touver)');
            $mabd->query('SET NAMES utf8;');

            //vérification du format de l'image téléchargée
			$imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu... ';
	                echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }
	
    		//creation d'un nouveau nom pour cette image téléchargée
            // pour éviter d'avoir 2 fichiers avec le même nom
	        $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
	

    		// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
	        if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
	            "../images/uploads/".$nouvelleImage)) {
	                echo '<p>Désolé... nous rencontrons un problème avec la sauvegarde de votre image</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();
	        }

			$req = 'INSERT INTO Voitures(voiture_modele,voiture_annee,voiture_prix,type_moteur,nb_chevaux,nb_couple,type_nom,nb_place,voiture_photo,_designer_id) 
            VALUES ("'.$modele.'","'.$annee.'","'.$prix.'","'.$moteur.'","'.$puissance.'","'.$couple.'","'.$categorie.'","'.$nb_place.'","'.$nouvelleImage.'","'.$numdesigner.'")';
			//echo $req;
            $resultat = $mabd->query($req);

		?>

    </main>

    <?php
        require ('../footer.php');
    ?>