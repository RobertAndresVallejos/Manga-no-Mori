CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(30) NOT NULL DEFAULT 'user',
    nom VARCHAR(255) UNIQUE NOT NULL,
    prenom VARCHAR(255) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
)

CREATE TABLE mangas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    dessinateur VARCHAR(255) NOT NULL,
    editeur VARCHAR(255) NOT NULL,
    genre VARCHAR(255) NOT NULL,
    tomes_possedes INT NOT NULL,
    tomes_total INT NOT NULL,
    prix DECIMAL(5,2) NOT NULL,
    image VARCHAR(255) NOT NULL,
    statut VARCHAR(255) NOT NULL
)