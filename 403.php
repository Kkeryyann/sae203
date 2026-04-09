<?php http_response_code(403); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès Interdit - Ferrari SAE 203</title>
    <style>
        /* Reset et base */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #ffffff;
            color: #1a1a1a;
        }

        .error-code {
            color: #cc0000;
            font-weight: bold;
        }

        /* Bouton Retour */
        .btn-retour {
            display: inline-block;
            padding: 12px 30px;
            background-color: #f1f1f1;
            color: #333;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            border: 1px solid #ddd;
            transition: 0.3s;
            text-transform: uppercase;
        }

        .btn-retour:hover {
            background-color: #cc0000;
            color: #fff;
            border-color: #cc0000;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1 class="error-code">403</h1>
        <h1>Accès Privé</h1>
        <p>Désolé, cette zone est réservée au personnel autorisé ou nécessite une connexion spécifique.</p>
        
        <a href="/" class="btn-retour">Retour à l'accueil</a>
    </div>
</body>
</html>
