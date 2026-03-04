        <?php
            // Appel du bloc Header et du Menu
            require ('header.php');
        ?>

        <main id="haut">
            <a class="btn" id="sticky-parallax-btn" href="index.php">
                Retour
                <span></span>
            </a>
            <h1>Rechercher une Ferrari</h1>
            <form action="reponse_recherche.php" method="GET" id="search">
                <div id="box"><hr>
                    <label for="recherche">Saisissez un modèle :</label>                    
                    <div class="relative">
                        <input type="text" class="block2" name="recherche" id="recherche" placeholder="Ex: 488 Pista" autocomplete="off" aria-label="Text input">
                        <div class="absolute">
                            <input type="submit" value="Rechercher">
                        </div>
                    </div>
                </div>
            </form>
        </main>
        
        <?php
            // Appel du bloc Footer
            require ('footer.php');
        ?>