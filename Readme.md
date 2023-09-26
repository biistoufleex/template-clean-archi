# Template clean archi 
lien de l'article (https://connect.ed-diamond.com/gnu-linux-magazine/glmf-257/faire-de-la-clean-architecture-avec-symfony
)

Ce type d’architecture permet :

d’avoir un code indépendant du framework/librairies et de ses versions ;
à l’ensemble du code métier d’être facilement testable (sans besoin de base de données, d’API...) ;
d’être indépendant de la présentation, car on peut facilement ajouter de nouvelles entrées et de nouvelles sorties (Web, API, ligne de commande...) ;
d’être indépendant du système de stockage de données : on peut partir d’un fichier plat pour évoluer vers une base de données SGBD ou NoSQL ou encore une API.

# Présentation du projet à développer
Nous allons développer une petite boutique en ligne, nous pourrons ajouter des produits à la vente d’un côté, et les ajouter dans un panier afin de passer commande de l’autre. Nous ne verrons pas ici l’ensemble du code de l’application, mais quelques parties pour présenter cette architecture. Vous trouverez le reste du code source sur le dépôt GitHub de l’article.