        <?php
            // Appel du bloc Header et du Menu
            require ('../header.php');
        ?>
        <main>
            <h1>Gérer nos designers</h1>
            <a class="btn" id="sticky-parallax-btn" href="../admin">
                Retour
                <span></span>
            </a>
            <button class="stp" title="Haut de page">
                <svg class="svgIcon" viewBox="0 0 384 512">
                    <path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"></path>
                </svg>
            </button>
            <a class="btn" href="table2_new_form.php">
                Ajouter un designer
                <span></span>
            </a>
            <div class="centrer">
                <table>
                    <thead>
                        <tr>
                            <td>Nom</td>
                            <td>Prénom</td>
                            <td>Nationalité</td>
                            <td>modifier</td>
                            <td>supprimer</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $mabd = new PDO('mysql:host=sae203-bd-mpp9yr;dbname=sae203Base;charset=UTF8;', 'sae203User', 'X4bRPsfIJn7A7yJOadRX');
                            $mabd->query('SET NAMES utf8;');
                            $req = "SELECT * FROM Designer";
                            $resultat = $mabd->query($req);

                            foreach ($resultat as $value) {
                                echo '<tr>' ;
                                echo '<td>'.strtoupper($value['designer_nom']) . '</td>';
                                echo '<td>' .ucfirst($value['designer_prenom']) . '</td>';
                                echo '<td>' . $value['designer_nationalite'] . '</td>';
                                echo '<td> <a href="table2_update_form.php?num='.$value['designer_id'].'" >modifier</a></td>';
                                echo '<td> <a href="table2_delete.php?num='.$value['designer_id'].'" >supprimer</a></td>';
                                echo '</tr>';
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </main>

        <?php
            require ('../footer.php');
        ?>