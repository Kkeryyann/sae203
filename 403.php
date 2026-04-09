<?php http_response_code(403); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès Interdit - Ferrari SAE 203</title>
    <style>

        .error-code {
            color: #c4151c;
            font-weight: bold;
        }

        .content {
            display: flex;
            flex-direction: column;
        }
        
        /* Bouton Retour */
        .btn-retour {
            background-color: black;
            border: 2px solid #c4151c;
            border-radius: 3px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition-duration: 0.3s;
        }

        .btn-retour:hover {
            background-color: #c4151c;
            border: 2px solid black;
            transition-duration: 0.3s;
        }
    </style>
</head>
<body>
    
    <?php
        // Appel du bloc Header et du Menu
        require ('header.php');
    ?>

    <div class="content">
        <h1 class="error-code">403</h1>
        <h1>Accès Privé</h1>
        <p>Désolé, cette zone est réservée au personnel autorisé ou nécessite une connexion spécifique.</p>
        
        <a href="/" class="btn-retour">Retour à l'accueil</a>
    </div>

   <?php
        // Appel du bloc Footer et du Menu
        require ('footer.php');
    ?>
</body>
</html>
