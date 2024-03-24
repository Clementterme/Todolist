# Todolist
Projet Simplon Todolist

## Installation

Lors de l'installation, veuillez renseigner dans le fichier config.php les bonnes informations relatives à la base de données.

## Migration
Lors de l'installation, la base de données va initialiser le code du fichier stocké dans les `Migrations`.

Si vous souhaitez faire des modifications avant la création de la base de données, c'est donc dans ce fichier que vous devez modifier les choses.

## Contexte du projet
L’objectif est de créer une application SPA (single page application), c’est à dire créer un site contenant une unique page qui ne sera pas rechargée lorsqu’une action y sera menée.

L'utilisateur pourra, une fois connecté, retrouver sa session.

Dans notre cas, cela s’articulera autour d’une liste de tâches, aussi appelée “todo list”. Lorsque l’utilisateur interagit avec la page web, pour créer une nouvelle tâche ou en valider une, la page ne sera pas rechargée grâce à AJAX (Asynchronous JavaScript And XML).

Le traitement des données se fera par l’intermédiaire de requêtes envoyés au backend en PHP.

Les données seront stockées dans une base de données créée spécialement pour le brief. Vous communiquerez avec cette dernière par l’intermédiaire de PHP et PDO.

Dans une démarche de gain de temps, vous devrez utiliser des composants Bootstrap pour accélérer l’intégration de la todolist.

🚨 L'ensemble des informations se trouvent dans le cahier des charges ci-joint.

Liste des actions réalisables dans la liste des tâches :

Créer une tâche.
Consulter le détail d’une tâche.
Valider une tâche.
Mettre à jour une tâche.

Liste des actions réalisables pour le compte utilisateur :

S'inscrire.
Consulter son compte après connexion.
Modifier son mail, nom, prénom, mot de passe.
Supprimer son compte.
​
Liste des livrables :

MCD de la base de données.
Maquettes / wireframes.
Dépôt GitHub avec README.
Le site mis en ligne sur le serveur de simplon.
Rendu Simplonline avec le lien des différents livrables (vérifier qu'ils soient accessibles publiquement).

## Modalités pédagogiques
11 demi-journée pour réaliser le projet, à rendre le 22/03/2024 (pas de présentation de projet). Travail SOLO.

## Modalités d'évaluation
Évaluation individuelle.

## Livrables
- MCD de la base de données.
- Maquettes / wireframes.
- Dépôt GitHub avec README.
- Le site mis en ligne sur le serveur de simplon.
- Rendu Simplonline avec le lien des différents livrables (vérifier qu'ils soient accessibles publiquement).

## Critères de performance
- Le site respecte le cahier des charges
- Les fonctionnalités attendues ne produisent pas d’erreurs
- Le site est responsive et s’adapte à un maximum d’écran
- Les fichiers sont découpés de manière pertinentes et les assets sont organisés
- La / les page(s) est/sont fonctionnelle(s)
- Respect des bonnes pratiques de nommages / indentation / sémantique