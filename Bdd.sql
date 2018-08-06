/*Creation de la base de données*/

CREATE DATABASE mini_chat;

/*Creation du tableau "personnes"*/

CREATE TABLE `personnes`
(
    pseudo_user VARCHAR(255) PRIMARY KEY
    mot_de_passe VARCHAR(30),
    couleur_personelle VARCHAR(10),
    nombre_messages_envoyes INT
);

/*Creation du tableau "messagerie"*/
CREATE TABLE `messagerie`
(
    id_messages INT PRIMARY KEY AUTO_INCREMENT,
    expediteur VARCHAR(25),
    messages TEXT,
    date_expedition DATETIME,
    adresse_ip VARCHAR (255),
    user_agent VARCHAR (255)
)
