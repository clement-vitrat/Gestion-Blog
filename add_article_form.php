<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter un article</title>
        <!-- APPEL DES DIFFERENTES PAGES DE STYLE -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login_register.css">
        <!-- APPEL DE LA FEUILLE DE STYLE POUR LES PETITS ICONES -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <!-- CREATION DE L'ICON POUR MA PAGE HTML -->
        <link href="img/icon.JPG" rel="icon">
    </head>

    <body>
        <!-- CREATION DE MON MENU -->
        <nav>
            <!-- Création du titre du menu -->
            <div class="logo">
                GESTION DE BLOG
            </div>
            <!-- Création du menu avec les sous-menus -->
            <ul>
                <li><a href="dashboard.php">Accueil</a></li>
                <li><a href="add_article_form.php" class="active">Ajouter un article</a></li>
                <li><a href="deconnecter.php">Se déconnecter</a></li>
            </ul>
        </nav>

        <!-- CREATION DU FORMULAIRE POUR AJOUTER UN ARTICLE -->
        <div class="ajouter">
            <h1>Ajouter un article</h1>

            <?php
            if(!empty($_GET["status"])) {
                if($_GET["status"] == "registered") {
                    echo "<div class='success'>L'article a été ajouté</div>";
                }
            }
            ?>
            
            <!-- Création du formulaire pour créer un article (nouvel article) -->
            <form action="add_article.php" method="post">
                <p><input type="text" name="titre" placeholder="TITRE DE L'ARTICLE" required></p>
                <p><textarea type="text" name="corps" required placeholder="CORPS DE L'ARTICLE"></textarea></p>       
                <button type="submit">Créer l'article</button>
            </form>
        </div>

    </body>
</html>