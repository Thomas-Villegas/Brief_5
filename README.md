# Brief_5
 
Je suis Thomas Villegas, un apprenant de la formation Titre Professionnel Développeur web et web mobile au GRETA de Mende.

Je dois réaliser une preuve de concept mettant en place un système de gestion de contenu en PHP avec une base de données SQL sous forme d'un Bookmark.


    1. Comprendre et présenter ce qu’est un CRUD

L’acronyme CRUD signifie Create, Read, Update, and Delete, qui correspondent aux opérations de base de la gestion de données. Ces opérations permettent de créer, lire, mettre à jour et supprimer des enregistrements dans une base de données.

Un CRUD sert à gérer les données d’une application.

Par exemple, dans une application de gestion de contacts, un CRUD permettrait de créer de nouveaux contacts, de lire les informations des contacts existantes, de mettre à jour ces informations et de supprimer des contacts.

La notion de CRUD à été inventée pour simplifier et standardiser la gestion de données en informatique. Elle a été adoptée par de nombreux systèmes de gestion de bases de données et est devenue un standard de l’industrie.

Un CRUD peut s’appliquer à de nombreux domaines, tels que les bases de données relationnelles, les bases de données NoSQL, les fichiers de données, etc.
Il est utilisé dans de nombreuses applications, y compris les sites Web, les applications mobiles et les applications de bureau.

Le CRUD n’est pas limité à un seul langage de programmation. Il peut être implémenté dans de nombreux langages, y compris le Java, le C#, le PHP, le Python, le Ruby, etc.


        2. La base de données

	2.1 Schématiser une base de données

Le principe va être de mettre en forme les données et les relations entre celles-ci avant de faire quoi que ce soit de technique.

Cette pratique s’appelle le MCD : Modèle Conceptuel de données.

L’exercice ici sera de créer un MCD correspondant à une base de données de bookmark.
On doit pouvoir enregistrer des catégories dans lesquelles on trouvera des liens de différentes ressources qu’on aurait pu trouver sur le web.

Vous trouverai mon MCD dans le dossier IMAGES : MCD Bookmark.png

    2.2 Faire prendre vie à votre base de données

A l’aide de PHPMyAdmin je vais pouvoir créer une base de données à l'aide de l’interface graphique. Cela se fait en plusieur étape : 

Je donne un nom à ma base de données et je sélectionne un type de jeu de caractères.
Je créer 2 tables : Catégorie et Bookmark.
Je définis les champs qui constituent nos tables. On va retrouver le type des données et les contraintes d’intégrité.

	2.3 Insérer des données dans votre base de données

Maintenant nous pouvons insérer des nouvelles données dans nos tables à l'aide de la commande SQL “INSERT INTO”. La syntaxe est la suivante : 

INSERT INTO `nomDeLaTable` (`valeur 1`, `valeur 2`) VALUES (`valeur 1`, `valeur 2`);

    2.4 Se servir du SQL pour récupérer des informations

Récupérer tous les bookmarks : 
SELECT * FROM `bookmark`;

Récupérer seulement 10 bookmark : 
SELECT * FROM `bookmark` LIMIT 10;

Récupérer tous les bookmarks d’une catégorie : 
SELECT * FROM `bookmark` WHERE `categorie_ID` = 1;

Récupérer les bookmarks qui contiennent un mot précis dans le nom : 
SELECT * FROM `bookmark` WHERE `bookmark_name` LIKE '%mot_precis%';

Récupérer les bookmark venant d’un certain site : 
SELECT * FROM `bookmark` WHERE `bookmark_url` LIKE ‘%site%’;


        3. Les Bases en PHP

	3.1 Afficher les éléments présents dans la base

Je vais devoir utiliser l’objet PDO pour qu’il puisse venir faire le lien entre PHP et ma base de données.

J’utilise les blocs TRY et CATCH pour bien gérer les erreurs de connexion, puis une fois la connexion établie je vais pouvoir effectuer ma requête SQL pour afficher les bookmarks de la base de données.

    3.2 Ajouter de nouveaux éléments à l’aide d’un formulaire

J’ai décidé pour ce travail d’afficher un formulaire avec une fonction en JavaScript quand on clique sur un bouton.

