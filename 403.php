<?php http_response_code(403); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur la page d'acceuil du site Ferrari dans le cadre de la SAE 203">
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/styles.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css">
    <script src="https://kit.fontawesome.com/0da9d84eca.js" crossorigin="anonymous"></script>
    <title>Accès Interdit</title>
    <style>
        .error-code {
            color: #c4151c;
            font-weight: bold;
        }

        .content {
            height: 100vh;
            display: flex;
            flex-direction: column;
            width: -webkit-fill-available;
            justify-content: center;
            align-items: center;
        }
        
        /* Bouton Retour */
        .btn-retour {
            background-color: black;
            border: 2px solid #c4151c;
            border-radius: 5px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            transition-duration: 0.3s;
            margin-top: 50px;
        }

        .btn-retour:hover {
            background-color: white;
            color: black;
            transition-duration: 0.3s;
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
