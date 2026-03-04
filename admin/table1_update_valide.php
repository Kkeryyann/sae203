        <?php
            require ('../header.php');
        ?>

        <main id="haut2">
            <a class="btn" href="voitures">
                Retour
                <span></span>
            </a>

            <?php
                $id= $_POST['id'];
                $modele=$_POST['modele'];
                $modele2=$_POST['modele2'];
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

                
                $imageName=$_FILES["photo"]["name"];

                //vérification du format de l'image téléchargée
                $imageType=$_FILES["photo"]["type"];
                if ( ($imageType != "image/png") &&
                    ($imageType != "image/jpg") &&
                    ($imageType != "image/jpeg") &&
                    ($imageType != "")) {
                        echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
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
                        echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
                        die();
                    }
                } else if ($imageType == "") {
                    $nouvelleImage = '../images/uploads/'.$_POST['photo2'];
                } else {
                    echo '<p>Problème : image non chargée...</p>'."\n";
                    die();
                }

                if ($imageType != "") {
                    $req = 'UPDATE Voitures SET voiture_modele="'.$modele.'", voiture_annee="'.$annee.'", type_moteur="'.$moteur.'", nb_chevaux="'.$puissance.'" , nb_couple="'.$couple.'", type_nom="'.$categorie.'", nb_place="'.$nb_place.'", voiture_prix="'.$prix.'", voiture_photo="'.$nouvelleImage.'", _designer_id="'.$numdesigner.'" WHERE voiture_id="'.$id.'"';
                    //echo $req;
                } else {
                    $req = 'UPDATE Voitures SET voiture_modele="'.$modele.'", voiture_annee="'.$annee.'", type_moteur="'.$moteur.'", nb_chevaux="'.$puissance.'" , nb_couple="'.$couple.'", type_nom="'.$categorie.'", nb_place="'.$nb_place.'", voiture_prix="'.$prix.'", _designer_id="'.$numdesigner.'" WHERE voiture_id="'.$id.'"';
                    //echo $req;
                }

                $resultat = $mabd->query($req);

                if ($resultat === false) {
                    // Si une erreur s'est produite lors de l'exécution de la requête
                    echo "Erreur lors de l'exécution de vore requête : " . $mabd->error;
                } else {
                    // Si la requête s'est exécutée avec succès
                    echo '<h1 class="modif">Votre Modification sur la <span>'.$modele.'</span> ('.$modele2.')<br>a bien été prise en compte</h1>';
                }
            ?>
            
            <div class="hr2">
                <hr>
                <hr>
            </div>
            <ul class="ul_admin">
                <li>

                    <?php 
                        echo '<a class="btn2" href="table1_update_form.php?num='.$id.'">
                            Recommencer
                            <span></span>
                        </a>';
                    ?>
                    
                </li>
            </ul>

        </main>

        <?php
            require ('../footer.php');
        ?>