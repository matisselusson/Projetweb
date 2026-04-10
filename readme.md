# Gestionnaire de Projets & Tickets

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

Application de gestion de projets, tickets et contrats avec un système de rôles, construite avec **Laravel 11** et **Laravel Breeze**.
Cette application a été faite en premier lieu avec MySQL puis a été migrée vers SQLite.

## Comptes de démonstration

> Mot de passe universel : `password`

| Rôle | Email |
|---|---|
| Administrateur | `test@test` |
| Client — Alpha Corp | `azerty@azerty` |
| Client — Beta Solutions | `qwerty@qwerty` |

**Collaborateurs**

| Nom | Email | Client(s) |
|---|---|---|
| Bob | `bob@example.com` | 1 |
| Clara Petit | `clara@example.com` | 1 |
| David Bernard | `david@example.com` | 1 |
| Emma | `emma@example.com` | 2 |
| François Morel | `francois@example.com` | 2 |
| Grace Simon | `grace@example.com` | 2 |
| Hugo | `hugo@example.com` | 1, 2 |
| Inès Moreau | `ines@example.com` | 1, 2 |
| Jules Girard | `jules@example.com` | 1, 2 |
| Noob | `noob@noob` | — |

---

## Système de rôles

Contrôlé par le middleware CheckRole enregistré sous l'alias role.

La centralisation des utilisateurs autour des clients a été pensée pour qu'un collaborateur soit rattaché à une entreprise précise. Cela améliore la coordination et évite des déplacements inutiles en limitant la visibilité et les actions de chaque collaborateur au périmètre de ses clients assignés. Cette règle s'applique également à l'administrateur : même lui ne peut pas accéder aux données d'un client sans y être explicitement rattaché via la table pivot client_myuser.

Par ailleurs, chaque projet doit obligatoirement être lié à une entreprise existante via client_id, et chaque contrat est lié à un projet unique — la colonne projet_id est définie en unique dans la migration, ce qui rend impossible la création d'un contrat sans projet existant associé, rigidifiant ainsi le système et évitant le moindre abus.

| Fonctionnalité | Admin | Collaborateur | Client |
|---|:---:|:---:|:---:|
| Voir toutes les données | ✅ | ❌ | ❌ |
| Voir ses données (scope client) | ✅ | ✅ | ✅ |
| Créer un projet / contrat | ✅ | ❌ | ❌ |
| Créer un ticket | ✅ | ✅ | ❌ |

---

## Laravel Breeze — Spécificités du projet

Breeze fournit l'ensemble du scaffold d'authentification (routes, contrôleurs, vues). Les personnalisations apportées :

- **Vue `login.blade.php` entièrement redesignée** — la vue Breeze par défaut a été remplacée par un template HTML/CSS custom avec un layout propre au projet (header avec logo, card de connexion).
- **Routes `auth.php` non modifiées** — le fichier généré par Breeze est conservé intact et inclus dans `web.php` via `require`.
- **Middleware `auth` et `verified`** utilisés sur l'ensemble du projet sauf les pages d'accueil et de connexion pour protéger le projet.
---


## Structure de la base de données

### `users` — table native Laravel / Breeze
| Colonne | Type | Détail |
|---|---|---|
| `id` | bigint | PK |
| `name` | string | |
| `email` | string | unique |
| `password` | string | hashé |
| `email_verified_at` | timestamp | nullable |
| `remember_token` | string | nullable |

### `myuser` — extension métier de l'utilisateur
| Colonne | Type | Détail |
|---|---|---|
| `id` | bigint | PK |
| `user_id` | FK → users | cascade delete |
| `role` | string | `administrateur`, `collaborateur`, `client` |

### `clients`
| Colonne | Type | Détail |
|---|---|---|
| `id` | bigint | PK |
| `name` | string(150) | |
| `email` | string(150) | unique |
| `phone` | string(20) | nullable |
| `address` | text | nullable |

### `projets`
| Colonne | Type | Détail |
|---|---|---|
| `id` | bigint | PK |
| `client_id` | FK → clients | restrict delete |
| `titre` | string(255) | |
| `description` | text | nullable |
| `statut` | string(50) | défaut : `Nouveau` |

### `tickets`
| Colonne | Type | Détail |
|---|---|---|
| `id` | bigint | PK |
| `projet_id` | FK → projets | restrict delete |
| `created_by` | FK → users | restrict delete |
| `assigned_to` | FK → users | nullable, null on delete |
| `titre` | string(250) | |
| `description` | text | nullable |
| `priorite` | string(50) | défaut : `Moyenne` |
| `statut` | string(50) | défaut : `Nouveau` |
| `type` | string(50) | défaut : `Inclus` |
| `estimated_minutes` | int unsigned | nullable |
| `actual_minutes` | int unsigned | défaut : `0` |
| `validated_at` | timestamp | nullable |
| `validated_by` | FK → users | nullable |
| `refusal_comment` | text | nullable |

### `contracts`
| Colonne | Type | Détail |
|---|---|---|
| `id` | bigint | PK |
| `projet_id` | FK → projets | unique — 1 contrat / projet, cascade delete |
| `hours_included` | int unsigned | défaut : `0` |
| `hourly_rate` | decimal(8,2) | défaut : `0` |
| `start_date` | date | nullable |
| `end_date` | date | nullable |

### Tables pivot
| Table | Lie | Détail |
|---|---|---|
| `client_myuser` | `myuser` ↔ `clients` | un utilisateur peut appartenir à plusieurs clients |
| `ticket_user` | `tickets` ↔ `users` | assignation des tickets |
| `myuser_ticket` | `tickets` ↔ `myuser` | assignation via profil étendu |
| `project_members` | `projets` ↔ `users` | membres d'un projet, avec `joined_at` |

---

## API REST

| Méthode | Endpoint | Description |
|---|---|---|
| `GET` | `/api/tickets` | Liste tous les tickets |
| `POST` | `/api/tickets` | Crée un ticket |

---



