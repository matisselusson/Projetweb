📌 Projet de Site de Ticketing
📖 Introduction

Bonjour,

Ce dépôt GitHub contient un projet de site de ticketing.
Le projet n’est malheureusement pas encore terminé et certaines fonctionnalités sont manquantes, notamment :

la modification et la suppression d’éléments
la gestion du temps pour les contrats
une grande partie du CSS

Cependant, le projet intègre déjà Breeze.

🚀 Fonctionnement général

Le site dispose d’une page d’accueil permettant de se connecter via un bouton Login, qui redirige vers la page de connexion.

Sur cette page, vous devez saisir :

votre adresse email
votre mot de passe

afin d’accéder à votre compte.

Un bouton Mot de passe oublié est également disponible.
Il redirige vers une page dédiée qui permettra, dans une future mise à jour, d’envoyer un email de réinitialisation.

👥 Rôles utilisateurs

L’accès aux fonctionnalités dépend du type de compte utilisé :

🔑 Administrateur
Accès à toutes les fonctionnalités
Peut voir l’ensemble des projets, tickets et contrats

🧑‍💼 Client
Peut consulter uniquement les projets et tickets liés à sa société

👨‍🔧 Collaborateur
Peut créer des tickets pour des projets liés à une société spécifique
Peut consulter les projets, tickets et contrats auxquels il est associé

📝 Gestion des tickets
Les collaborateurs et les administrateurs peuvent créer des tickets
Lors de la création, il est obligatoire d’ajouter des membres travaillant avec la société concernée

📂 Gestion des projets
Seul l’administrateur peut créer des projets
Chaque projet doit obligatoirement être associé à une société

📄 Gestion des contrats
Seul l’administrateur peut créer des contrats
Chaque contrat doit :
être lié à un seul projet
contenir les informations nécessaires

🔒 Visibilité des données
Les clients et collaborateurs ne peuvent voir que :
les projets auxquels ils sont liés
les tickets associés
Les collaborateurs peuvent également consulter les contrats associés
Les administrateurs ont un accès complet à toutes les données

⚠️ État du projet

Le projet est actuellement en cours de développement :

certaines fonctionnalités sont incomplètes
le design (CSS) reste à finaliser