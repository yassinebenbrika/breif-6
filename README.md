### Introduction
DataWare, une entreprise innovante, a confié à votre équipe la mission cruciale de révolutionner sa gestion du personnel. Pour atteindre cet objectif, vous êtes chargés de concevoir une interface conviviale exploitant les langages PHP et SQL. L'objectif principal est de répondre de manière optimale aux exigences de DataWare en matière de gestion des ressources humaines.

### Objectif du Projet
Le projet vise à créer un système de gestion des ressources humaines pour DataWare. Cela implique la conception d'une interface utilisateur conviviale ainsi que d'une base de données robuste pour stocker et gérer les informations liées aux équipes et aux membres du personnel.

### Comment utiliser
1. Clonez ce référentiel sur votre machine locale en utilisant la commande `git clone`.
2. Ouvrez les fichiers HTML dans votre navigateur Web pour naviguer à travers les différentes pages de l'interface.

### Conception en UML
Consultez les diagrammes UML (Use Case, Classe, et Séquence) pour une représentation claire des structures et des relations du système [ici](https://lucid.app/lucidchart/128ad176-b9b2-4212-ac70-e8e7af514956/edit?viewport_loc=-3908%2C-783%2C8322%2C3849%2C0_0&invitationId=inv_1792402f-db89-4954-975a-430a7944c2c2).

### Repository GitHub
Le code source du projet est disponible sur [GitHub](https://github.com/yassinebenbrika/breif-5-1).

### Tableau d'affichage des membres
Consultez le tableau d'affichage des membres du personnel [ici](http://localhost/breif-5/member.php).

### Création de la table "equipe"
```sql
CREATE TABLE equipe (
    id_equipe INT AUTO_INCREMENT PRIMARY KEY,
    nom_de_equipe VARCHAR(255) NOT NULL,
    date_de_creation DATE NOT NULL
);
```

### Création de la table "member"
```sql
CREATE TABLE member (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL,
    equipe VARCHAR(255) NOT NULL,
    statut VARCHAR(255) NOT NULL,
    telephone INT,
    date_de_creation DATE NOT NULL
);
```

### User Stories
- En tant qu'utilisateur, je souhaite m'inscrire et m'authentifier en utilisant un login et un mot de passe pour accéder à la plateforme.
- En tant qu'utilisateur, je souhaite consulter mes projets et mes équipes.
- En tant que Product Owner, je souhaite créer, modifier et supprimer des projets pour répondre aux évolutions des besoins de l'entreprise.
- En tant que Product Owner, je veux assigner des Scrum Masters à des projets spécifiques en définissant leurs rôles respectifs.
- En tant que Scrum Master, je veux pouvoir gérer la création, la modification et la suppression d'équipes pour garantir une organisation efficace.
- En tant que Scrum Master, j'ai besoin d'ajouter ou supprimer des membres de l'équipe pour ajuster les effectifs selon les besoins.
- En tant que Scrum Master, je désire affecter des équipes à des projets spécifiques pour une répartition optimale des ressources.
