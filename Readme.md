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

my_clean_app/
├── src/
│   ├── Application/
│   │   ├── UseCase/
│   │   │   ├── CreateAuthTokenUseCase.php
│   │   │   ├── ... (autres cas d'utilisation)
│   │   │   └── CreateAuthTokenUseCaseInterface.php
│   │   ├── Service/
│   │   │   ├── UserService.php
│   │   │   ├── ... (autres services applicatifs)
│   │   │   └── UserServiceInterface.php
│   │   └── ... (autres composants de la partie Application)
│   ├── Domain/
│   │   ├── Entity/
│   │   │   ├── User.php
│   │   │   ├── ... (autres entités)
│   │   │   └── ValueObject/
│   │   │       ├── Email.php
│   │   │       ├── ... (autres valeurs objets)
│   │   ├── Repository/
│   │   │   ├── UserRepository.php
│   │   │   ├── ... (autres repositories)
│   │   │   └── UserRepositoryInterface.php
│   │   └── ... (autres composants de la partie Domain)
│   ├── Infrastructure/
│   │   ├── Persistence/
│   │   │   ├── Doctrine/
│   │   │   │   ├── UserRepository.php
│   │   │   │   ├── ... (autres repositories Doctrine)
│   │   │   │   └── DoctrineUserRepository.php
│   │   │   └── ... (autres composants de persistance)
│   │   ├── Web/
│   │   │   ├── Controller/
│   │   │   │   ├── AuthController.php
│   │   │   │   ├── ... (autres contrôleurs)
│   │   │   │   └── UserController.php
│   │   │   └── ... (autres composants Web)
│   │   └── ... (autres composants de la partie Infrastructure)
│   └── ... (autres composants globaux du projet)
├── config/
│   ├── packages/
│   │   ├── parameters.yaml
│   │   └── ... (autres fichiers de configuration)
│   ├── services.yaml
│   └── ... (autres fichiers de configuration Symfony)
├── templates/
├── tests/
├── var/
├── vendor/
├── .env
├── .gitignore
├── composer.json
├── phpunit.xml.dist
├── README.md
└── ... (autres fichiers et répertoires du projet)
