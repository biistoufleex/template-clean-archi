# Template clean archi 
lien de l'article (https://connect.ed-diamond.com/gnu-linux-magazine/glmf-257/faire-de-la-clean-architecture-avec-symfony
)

## Ce type d’architecture permet :

d’avoir un code indépendant du framework/librairies et de ses versions ;
à l’ensemble du code métier d’être facilement testable (sans besoin de base de données, d’API...) ;
d’être indépendant de la présentation, car on peut facilement ajouter de nouvelles entrées et de nouvelles sorties (Web, API, ligne de commande...) ;
d’être indépendant du système de stockage de données : on peut partir d’un fichier plat pour évoluer vers une base de données SGBD ou NoSQL ou encore une API.


# Résumé : Développement d'une Application Symfony avec Clean Architecture

## Introduction
Ce document résume les principaux concepts et directives pour développer une application Symfony en utilisant l'architecture Clean. L'architecture Clean est une approche de conception logicielle qui favorise la séparation claire des préoccupations et la maintenabilité de l'application.

## Architecture Clean en Trois Parties
L'architecture Clean divise une application en trois parties distinctes, chacune ayant des responsabilités spécifiques :

### 1. Domain
- La partie Domain est le cœur de l'application.
- Elle contient les entités, les agrégats et les valeurs objets qui représentent le modèle métier.
- Les règles métier, les invariants et la logique métier spécifique résident ici.
- Aucune dépendance aux détails techniques ou à l'infrastructure n'est autorisée ici.

### 2. Application
- La partie Application gère la logique métier de haut niveau.
- Elle expose les cas d'utilisation (Use Cases) qui décrivent des actions métier spécifiques que l'application peut effectuer.
- Les interfaces des cas d'utilisation sont définies ici, mais l'implémentation réelle peut se trouver dans la partie Infrastructure.
- La logique métier complexe, les validations, la gestion des erreurs et les tests unitaires sont généralement situés dans cette partie.

### 3. Infrastructure
- La partie Infrastructure s'occupe des détails techniques et des dépendances externes.
- Les implémentations concrètes des interfaces des cas d'utilisation et des services applicatifs sont fournies ici.
- Les interactions avec la base de données, les requêtes SQL, les appels API, la gestion des fichiers, etc., sont gérés dans cette partie.
- La configuration, l'authentification, la gestion des autorisations et d'autres aspects de l'infrastructure sont également gérés ici.

## Développement Pratique
Pour développer une application Symfony en utilisant Clean Architecture, suivez ces étapes générales :

1. **Créez la Structure de Votre Projet**
   - Organisez votre projet Symfony en fonction des trois parties : Domain, Application et Infrastructure.
   - Créez des namespaces et des répertoires appropriés pour chaque partie.

2. **Développez la Partie Domain**
   - Définissez les entités, les agrégats et les valeurs objets qui représentent le modèle métier.
   - Appliquez les règles métier et les invariants dans cette partie.

3. **Développez la Partie Application**
   - Définissez les cas d'utilisation (Use Cases) et les interfaces associées.
   - Implémentez la logique métier de haut niveau en utilisant ces cas d'utilisation.
   - Gérez la validation des entrées, la gestion des erreurs métier et les tests unitaires.

4. **Développez la Partie Infrastructure**
   - Implémentez les détails techniques et les dépendances externes.
   - Créez les implémentations concrètes des interfaces définies dans la partie Application.
   - Configurez la communication avec la base de données, les appels API, la gestion des fichiers, etc.

5. **Gestion des Dépendances**
   - Configurez l'injection de dépendances pour connecter la partie Application à la partie Infrastructure.
   - Utilisez les interfaces définies dans la partie Application pour interagir avec les services de la partie Infrastructure.

6. **Tests et Validation**
   - Effectuez des tests unitaires pour chaque composant de la partie Application.
   - Assurez-vous que les règles métier sont respectées et que les cas d'utilisation fonctionnent correctement.

7. **Déployez Votre Application**
   - Configurez l'environnement de production et déployez votre application Symfony.

## Conclusion
L'utilisation de l'architecture Clean avec Symfony permet de créer des applications modulaires, testables et évolutives en maintenant une séparation claire entre la logique métier et les détails techniques. En suivant ces directives, vous pouvez développer une application Symfony robuste et maintenable.


# exemple structure 


- `my_clean_app/` : Le répertoire racine de votre application Symfony.

- `src/` : Le répertoire source principal de votre projet.

  - `Application/` : La partie Application de l'architecture Clean.

    - `UseCase/` : Les cas d'utilisation (Use Cases) et leurs interfaces.

    - `Service/` : Les services applicatifs et leurs interfaces.

  - `Domain/` : La partie Domain de l'architecture Clean.

    - `Entity/` : Les entités, agrégats et valeurs objets.

    - `Repository/` : Les interfaces de repository et leurs implémentations.

  - `Infrastructure/` : La partie Infrastructure de l'architecture Clean.

    - `Persistence/` : Les composants liés à la persistance, tels que les repositories Doctrine.

    - `Web/` : Les composants liés à l'interface utilisateur Web, tels que les contrôleurs Symfony.

- `config/` : Les fichiers de configuration Symfony, y compris les paramètres, les services, etc.

- `templates/` : Les fichiers de templates Twig (si vous utilisez Symfony pour la création de vues).

- `tests/` : Les fichiers de tests unitaires pour tester la logique métier.

- `var/` : Les fichiers de données temporaires et de cache générés par Symfony.

- `vendor/` : Les dépendances installées via Composer.

- `.env` : Le fichier d'environnement qui contient des variables d'environnement.

- `.gitignore` : Le fichier pour spécifier les fichiers et répertoires à ignorer dans Git.

- `composer.json` : Le fichier de configuration Composer pour la gestion des dépendances.

- `phpunit.xml.dist` : Le fichier de configuration PHPUnit pour les tests unitaires.

- `README.md` : La documentation de votre projet.

Cette structure de projet vous permet de séparer clairement les différentes parties de l'architecture Clean (Domain, Application, Infrastructure) et de les organiser de manière modulaire pour une maintenance facile et une séparation claire des préoccupations. Vous pouvez personnaliser davantage cette structure en fonction des besoins spécifiques de votre projet.
