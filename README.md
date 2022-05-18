# Exercice Gestion de Blog - Clément VITRAT

## Objectif de l'exercice :
L'objectif était de réaliser un mini-site de gestion de blog.
Un utilisateur peut alors :
    <ul>
        <li>S'enregistrer</li>
        <li>Se connecter</li>
        <li>Ajouter un article (en étant connecté)</li>
        <li>Modifier un article (en étant connecté)</li>
        <li>Visualiser sa liste d'article (en étant connecté)</li>
        <li>Se déconnecter</li>
        <li>S'il n'est pas connecté, il est possible de voir la liste de tous les articles, avec le nom de leurs articles</li>
    </ul>

-------------------------
-------------------------

## Description des fonctionnalités réalisées :

> ### **Une fois le site lancé :**
> L'utilisateur peut voir les différents articles, s'incrire ou se connecter.
>
> >Une fois le site lancé, l'utilisateur arrive sur une page **index.php** qui est la page d'**Accueil** du site. L'utilisateur peut donc voir la liste des articles (Titre, Corps, Date de création, Date de modification, Auteur).
> >De plus, grâce à la barre de navigation, l'utilisateur peut s'inscrire ou se connecter afin de pouvoir créer à son tour des articles.
> >
> ><img src="img/index.png" alt="Page d'accueil"/>
> 
> ---
> 
> >Si l'utilisateur souhaite **s'incrire**, il lui suffit d'appuyer sur **S'inscrire** dans la barre de navigation qui le renverra automatiquement vers la page **register_form.php**.
> >Une fois sur cette page, l'utilisateur devra rentrer les informations suivantes :
> >  - son adresse mail,
> >  - son mot de passe,
> >  - confirmer son mot de passe
> >
> >Puis appuyer sur le bouton **S'inscrire**. Il sera alors rediriger automatiquement vers la page de **Connexion** pour se connecter et pouvoir ainsi ajouter des articles.
> >
> ><img src="img/register.png" alt="Page d'inscription"/>
>
> ---
>
> >Si l'utilisateur souhaite **se connecter**, il lui suffit d'appuyer sur **Se connecter** dans la barre de navigation qui le renverra automatiquement vers la page **login_form.php**.
> >Une fois sur cette page, l'utilisateur devra rentrer les informations suivantes :
> >  - son adresse mail,
> >  - son mot de passe
> >
> >Puis appuyer sur le bouton **Se connecter**. Il sera alors rediriger automatiquement vers la page **dashboard.php** contenant tous ses articles. Une fois ici, il pourra modifier un article, créer un article ou se déconnecter.
> >
> ><img src="img/login.png" alt="Page de connexion"/>

---

> ### **Une fois l'utilisateur connecté :**
> L'utilisateur peut voir ses différents articles, ajouter de nouveau, en modifier ou se déconnecter.
>
> >L'utilisateur arrive sur la page **Accueil**, **dashboard.php**, où il voit sa liste d'articles. De plus, il peut modifier l'article souhaité ou depuis la barre de navigation, ajouter un article ou se déconnecter.
> >
> ><img src="img/dashboard.png" alt="Page d'accueil de l'utilisateur"/>
> ---
> >Si l'utilisateur souhaite **ajouter un article**, il lui suffit d'appuyer sur **Ajouter un article** dans la barre de navigation qui le renverra automatiquement vers la page **add_article_form.php**.
> >Une fois sur cette page, l'utilisateur devra rentrer les informations suivantes :
> > - le Titre de l'article,
> > - le Corps de l'article
> >
> >Puis appuyer sur le bouton **Créer l'article**. Il sera alors rediriger automatiquement vers la page **dashboard.php** contenant tout ses articles. Il pourra ainsi voir dans sa liste d'articles, l'article qu'il vient de créer.
> >
> ><img src="img/add_article.png" alt="Page pour Ajotuer un article"/>
>---
> > Si l'utilisateur souhaite **modifier un article**, il lui suffit d'appuyer sur le petit icon avec le stylo en face de l'article qu'il souhaite modifier.
> >
> ><img src="img/modif_article.png" alt="Page d'accueil de l'utilisateur"/>
> >
> >Puis il sera renvoyé automatiquement vers la page **modif_article_form.php**.
> >Une fois sur cette page, l'utilisateur pourra modifier les informations suivantes, qu'il souhaite,  :
> > - le titre de l'article,
> > - le corps de l'article
> >
> ><img src="img/modif_art.png" alt="Page pour Modifier un article"/>
> >
> >Puis appuyez sur le bouton, **Modifier l'article**. Il sera alors rediriger automatiquement vers la page **dashboard.php** contenant tout ses articles. Il pourra ainsi voir dans sa liste d'articles, que son article a bien été modifié.
> ---
> >Si l'utilisateur souhaite **se déconnecter**, il lui suffit d'appuyer sur **Se déconnecter** dans la barre de navigation qui le renverra automatiquement vers la page **deconnecter.php**.
> >
> ><img src="img/deconnecter.png" alt="Page pour informer l'utilisateur qu'il s'est déconnecté"/>
> >
> >Une fois sur cette page, l'utilisateur sera informer qu'il a été déconnecté avec succès. Il pourra retourner à l'Accueil pour voir tous les articles de tout le monde ainsi que les sien sans pouvoir les modifier. De plus, il pourra se reconnecter.


-------------------------
-------------------------

## Mes différents fichiers :

Explication brief de chacun de mes fichiers.

|Nom du fichier| Description |
|--------------|-------------|
|``index.php``|<li>**Page principale, page d'Accueil**</li><li>Affichage de tous les articles de tous les utilisateurs</li><li>Dispose de plusieurs liens vers d'autres pages :</li><ul><li>Lien pour s'Inscrire</li><li>Lien pour se Connecter</li></ul>|
|``register_form.php``|<li>**Page pour s'Incrire**</li><li>Dispose de plusieurs liens vers d'autres pages :</li><ul><li>Lien pour se Connecter</li><li>Lien pour retourner sur la page d'Acceuil</li></ul>|
|``register.php``|<li>Ce fichier est composé de tous les actions nécessaire pour s'inscrire :</li><ul><li>Traite les champs du formulaire</li><li>Récupère les données du formulaire</li><li>Vérifie la conformité de l'adresse mail</li><li>Vérifie que la confirmation du mot de passe soit la même que le mot de passe</li><li>Hache le mot de passe</li><li>Se connecte à la base de données "projetfs"</li><li>Ajoute l'utilisateur dans la base de données</li></ul>|
|``login_form.php``|<li>**Page pour se Connecter**</li><li>Dispose de plusieurs liens vers d'autres pages :</li><ul><li>Lien pour s'Inscrire</li><li>Lien pour retourner sur la page d'Acceuil</li></ul>|
|``login.php``|<li>Ce fichier est composé de tous les actions nécessaire pour se connecter :</li><ul><li>Récupère les données du formulaire</li><li>Se connecte à la base de données "projetfs"</li><li>Récupère l'utilisateur (*) à partir de son adresse mail</li><li>Vérifie le mot de passe</li><li>Crée la variable de l'utilisateur connecté pour la session en cours</li></ul>|
|``dashboard.php``|<li>**Page après connexion par l'utilisateur**</li><li>Affiche tous les articles de l'utilisateur connecté</li><li>Dispose de plusieurs liens vers d'autres pages :</li><ul><li>Lien pour Ajouter un article</li><li>Lien pour Modifier un article</li><li>Lien pour se Déconnecter</li></ul>|
|``add_article_form.php``|<li>**Page pour Ajouter un article**</li><li>Dispose de plusieurs liens vers d'autres pages :</li><ul><li>Lien pour retourner aux articles de l'utilisateur connecté</li><li>Lien pour se Déconnecter</li></ul>|
|``add_article.php``|<li>Ce fichier est composé de tous les actions nécessaire pour ajouter un article :</li><ul><li>Récupère les données du formulaire (titre et corps de l'article)</li><li>Se connecte à la base de données "projetfs"</li><li>Ajoute l'article créé dans la base de données</li></ul>|
|``modif_article_form.php``|<li>**Page pour Modifier un article**</li><li>Dispose de plusieurs liens vers d'autres pages :</li><ul><li>Lien pour retourner aux articles de l'utilisateur connecté</li><li>Lien pour Ajouter un artticle</li><li>Lien pour se Déconnecter</li></ul>|
|``modif_article.php``|<li>Ce fichier est composé de tous les actions nécessaire pour modifier un article :</li><ul><li>Récupère les données du formulaire (id, titre et corps de l'article)</li><li>Se connecte à la base de données "projetfs"</li><li>Met à jour la base de données après avoir modifier l'article</li></ul>|
|``deconnecter.php``|<li>**Page pour se Déconnecter**</li><li>Dispose de plusieurs liens vers d'autres pages :</li><ul><li>Lien vers la page principale avec tous les articles de tous les utilisateurs</li><li>Lien pour se Reconnecter</li><li>Lien pour s'Inscrire</li></ul>|
|``utils.php``|<li>Ce fichier est composé de tous les fonctions nécessaire pour la gestion d'un blog :</li><ul><li>Créé les différents codes d'erreurs</li><li>Fonction qui redirige en cas d'erreur</li><li>Fonction qui vérifie s'il existe une erreur passée en paramètre et affiche un élément HTML contenant l'erreur</li><li>Fonction qui permet de vérifier si le mot de passe respecte les règles (8 chr, 1 M, 1 m, 1 ch, 1 carac)</li><li>Fonction qui liste les différents articles</li></ul>|
|``bdd.php``|<li>Appel de ma base de données "projetfs"</li>|
|``projet-final.sql ``|<li>Fichier qui créé la base de données "projetfs"</li>|
