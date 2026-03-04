<?php
    // header.php
    $title = "Accueil"; // Titre par défaut
    $meta_description = "Bienvenue sur la page d'acceuil du site Ferrari dans le cadre de la SAE 203"; // Description par défaut
    // Définir des titres spécifiques pour chaque page
    $currentPage = basename($_SERVER['PHP_SELF']);
    switch ($currentPage) {
        case 'listing.php':
            $title = "Tous Les Modèles Ferrari";
            $meta_description = "Découvrez notre collection de modèles Ferrari, des voitures de légende qui ont marqué l'histoire de l'automobile.";
            break;
        case 'form_recherche.php':
            $title = "Effectuer Une Recherche";
            $meta_description = "Recherchez un modèle de Ferrari par son nom, son année de sortie, sa puissance, son prix ou encore le nom de son designer.";
            break;
        case 'reponse_recherche.php':
            $title = 'Résultats Correspondants à "'.$_GET['recherche'].'"';
            $meta_description = "Découvrez les résultats de la recherche pour '".$_GET['recherche']."'.";
            break;
        case 'admin.php':
            $title = "Administration";
            $meta_description = "Espace d'administration pour gérer les modèles de Ferrari et les designers.";
            break;
        case 'table1_gestion.php':
            $title = 'Gestion De Nos Modèles';
            $meta_description = "Gérez les modèles de Ferrari en ajoutant, modifiant ou supprimant des modèles.";
            break;
        case 'table1_new_form.php':
            $title = 'Ajouter Une Ferrari';
            $meta_description = "Ajoutez un nouveau modèle de Ferrari à la collection.";
            break;
        case 'table1_new_valide.php':
            $title = 'Ferrari Ajoutée Avec Succès';
            $meta_description = "Le modèle de Ferrari quevous avez ajouté a bien été ajouté à la collection.";
            break;
        case 'table1_update_form.php':
            $title = 'Modifier Une Ferrari';
            $meta_description = "Modifiez un modèle de Ferrari existant.";
            break;
        case 'table1_update_valide.php':
            $title = 'Ferrari Modifiée Avec Succès';
            $meta_description = "Le modèle de Ferrari que vous avez modifié a bien été mis à jour.";
            break;
        case 'table1_delete.php':
            $title = 'Ferrari Supprimée Avec Succès';
            $meta_description = "Le modèle de Ferrari que vous avez supprimé a bien été retiré de la collection.";
            break;
        case 'table2_gestion.php':
            $title = 'Gestion De Nos Designers';
            $meta_description = "Gérez les designers en ajoutant, modifiant ou supprimant des designers.";
            break;
        case 'table2_new_form.php':
            $title = 'Ajouter Un Designer';
            $meta_description = "Ajoutez un nouveau designer à la liste de nos designers.";
            break;
        case 'table2_new_valide.php':
            $title = 'Designer Ajouté Avec Succès';
            $meta_description = "Le designer que vous avez ajouté a bien été ajouté à notre liste de designers.";
            break;
        case 'table2_update_form.php':
            $title = 'Modifier Un Designer';
            $meta_description = "Modifiez des informations sur un designer existant.";
            break;
        case 'table2_update_valide.php':
            $title = 'Designer Modifié Avec Succès';
            $meta_description = "Les informations sur le designer que vous avez modifié ont bien été mises à jour.";
            break;
        case 'table2_delete.php':
            $title = 'Designer Supprimé Avec Succès';
            $meta_description = "Le designer que vous avez supprimé a bien été retiré de la liste.";
            break;
        // Ajouter d'autres pages ici


    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css">
    <script src="https://kit.fontawesome.com/0da9d84eca.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <div id="logo">
            <a href="../index.php"><img src="../images/logo.png" alt="Logo ferrari"></a>
        </div>
	    <nav>
    	    <div class="nav-bar">
                <input type="checkbox" id="check">
                <div class="menu">
                    <ul class="nav-ul">
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="current"' : ''; ?>><a href="..">Accueil</a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'listing.php') ? 'class="current"' : ''; ?>><a href="../listing.php">Nos modèles</a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'form_recherche.php') ? 'class="current"' : ''; ?>><a href="../form_recherche.php">Rechercher</a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'admin.php') ? 'class="current"' : ''; ?>><a href="../admin">Privé</a></li>
                    </ul>
                    <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                </div>
                <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
            </div>
        </nav>
    </header>