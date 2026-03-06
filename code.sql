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
    tomes_numero INT NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    dessinateur VARCHAR(255) NOT NULL,
    genre VARCHAR(255) NOT NULL,
    editeur VARCHAR(255) NOT NULL,
    tomes_nombre_stock INT NOT NULL,
    tomes_total INT NOT NULL,
    prix DECIMAL(5,2) NOT NULL,
    image VARCHAR(255) NOT NULL,
    statut VARCHAR(255) NOT NULL
)

INSERT INTO mangas VALUES 
(null, 'Assassination Classroom', 1, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 1, 21, 6.95, 'img/mangas/tomes/assassination-classroom-1.jpg', 'En stock'),
(null, 'Assassination Classroom', 2, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 3, 21, 6.95, 'img/mangas/tomes/assassination-classroom-2.jpg', 'En stock'),
(null, 'Assassination Classroom', 3, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 20, 21, 6.95, 'img/mangas/tomes/assassination-classroom-3.jpg', 'En stock'),
(null, 'Assassination Classroom', 4, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 0, 21, 6.95, 'img/mangas/tomes/assassination-classroom-4.jpg', 'En stock'),
(null, 'Assassination Classroom', 5, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 1, 21, 6.95, 'img/mangas/tomes/assassination-classroom-5.jpg', 'En stock'),
(null, 'Assassination Classroom', 6, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 4, 21, 6.95, 'img/mangas/tomes/assassination-classroom-6.jpg', 'En stock'),
(null, 'Assassination Classroom', 7, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 16, 21, 6.95, 'img/mangas/tomes/assassination-classroom-7.jpg', 'En stock'),
(null, 'Assassination Classroom', 8, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 8, 21, 6.95, 'img/mangas/tomes/assassination-classroom-8.jpg', 'En stock'),
(null, 'Assassination Classroom', 9, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 8, 21, 6.95, 'img/mangas/tomes/assassination-classroom-9.jpg', 'En stock'),
(null, 'Assassination Classroom', 10, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 4, 21, 6.95, 'img/mangas/tomes/assassination-classroom-10.jpg', 'En stock'),
(null, 'Assassination Classroom', 11, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 5, 21, 6.95, 'img/mangas/tomes/assassination-classroom-11.jpg', 'En stock'),
(null, 'Assassination Classroom', 12, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 7, 21, 6.95, 'img/mangas/tomes/assassination-classroom-12.jpg', 'En stock'),
(null, 'Assassination Classroom', 13, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 14, 21, 6.95, 'img/mangas/tomes/assassination-classroom-13.jpg', 'En stock'),
(null, 'Assassination Classroom', 14, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 15, 21, 6.95, 'img/mangas/tomes/assassination-classroom-14.jpg', 'En stock'),
(null, 'Assassination Classroom', 15, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 16, 21, 6.95, 'img/mangas/tomes/assassination-classroom-15.jpg', 'En stock'),
(null, 'Assassination Classroom', 16, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 40, 21, 6.95, 'img/mangas/tomes/assassination-classroom-16.jpg', 'En stock'),
(null, 'Assassination Classroom', 17, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 9, 21, 6.95, 'img/mangas/tomes/assassination-classroom-17.jpg', 'En stock'),
(null, 'Assassination Classroom', 18, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 11, 21, 6.95, 'img/mangas/tomes/assassination-classroom-18.jpg', 'En stock'),
(null, 'Assassination Classroom', 19, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 19, 21, 6.95, 'img/mangas/tomes/assassination-classroom-19.jpg', 'En stock'),
(null, 'Assassination Classroom', 20, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 6, 21, 6.95, 'img/mangas/tomes/assassination-classroom-20.jpg', 'En stock'),
(null, 'Assassination Classroom', 21, 'Yūsei Matsui', 'Yūsei Matsui', 'Shonen', 'Kana', 5, 21, 6.95, 'img/mangas/tomes/assassination-classroom-21.jpg', 'En stock');