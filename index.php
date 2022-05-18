<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion de blog</title>
        <!-- APPEL DES DIFFERENTES PAGES DE STYLE -->
        <link rel="stylesheet" href="css/style.css">
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
                <li><a href="index.html" class="active">Accueil</a></li>
                <li><a href="register_form.php">S'inscrire</a></li>
                <li><a href="login_form.php">Se connecter</a></li>
            </ul>
        </nav>
   
        <?php
            include_once('utils.php');
            check_and_display_error();
        ?>
        
        <!-- CREATION DU TABLEAU AFFICHANT TOUS LES ARTICLES AVEC LE NOM DU CREATEUR -->
        <?php
            //Connexion à la Base de données "projetfs"
            $mysqli = new mysqli("localhost", "root", "", "projetfs");
            $mysqli->set_charset("utf8");
            //Requete de la base de données projetfs pour récupérer l'ensemble des articles avec le nom du créateur
            $requete = "SELECT titre,corps,created_at,updated_at,email FROM article JOIN utilisateur u WHERE id_utilisateur=u.id;";
            $resultat = $mysqli->query($requete);
        ?>
        <!-- Créaction du tableau -->
        <table>
            <caption>Liste des articles</caption>
            <thead>
                <tr>
                    <th>Titre de l'article</th>
                    <th>Corps de l'article</th>
                    <th style="text-align:center;">Date de création</th>
                    <th style="text-align:center;">Date de modification</th>
                    <th>Utilisateur</th>
                </tr>
            </thead>
            <?php
                //Affichage de l'ensemble des articles avec le nom du créateur
                while ($row = $resultat->fetch_assoc()) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['titre']; ?></td>
                    <td><?php echo $row['corps']; ?></td>
                    <td style="text-align:center;"><?php echo $row['created_at']; ?></td>
                    <td style="text-align:center;"><?php echo $row['updated_at']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            </tbody>
            <?php }
                $mysqli->close();
            ?>
        </table>
        <!-- Demande à l'utilisateur s'il veut ajouter un article ou non -->
        <div class="ajart">
            <p>Vous voulez ajouter un article ?</p>
            <p>Si oui, <a href="register_form.php">Incrivez-vous</a> ou <a href="login_form.php">Connectez-vous</a> !</p>
        </div>

    </body>
</html>