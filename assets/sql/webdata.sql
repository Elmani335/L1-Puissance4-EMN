SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Story 1 crée table utilisateur / score / message / jeu  --

DROP TABLE IF EXISTS 'utilisateur';

CREATE TABLE IF NOT EXISTS utilisateurs (

    id varchar(40) NOT NULL,
    email varchar(60) NOT NULL,
    mdp varchar(40) NOT NULL,
    pseudo varchar(40) NOT NULL,
    date_heure_inscription datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    date_heure_derniere_connexion datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ('id')

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS 'score' (

    `id` varchar(40) NOT NULL,
    `id_joueur` varchar(40) NOT NULL,
    `id_jeu` varchar(40) NOT NULL,
    `difficulty` int(1) NOT NULL AUTO_INCREMENT,
    `score` int(10) NOT NULL AUTO_INCREMENT,
    `date-heure_partie` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ('id')

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS 'message-chat' (

    `id` varchar(40) NOT NULL,
    `id_jeu` varchar(40) NOT NULL,
    `identifiant_expediteur` varchar(40) NOT NULL,
    `message` varchar(200) NOT NULL,
    `date_heure_message` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ('id')

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS 'jeu' (

    `id` varchar(40) NOT NULL,
    `nom_jeu` varchar(40) NOT NULL,
    PRIMARY KEY ('id')

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- Story 2


CREATE TABLE IF NOT EXISTS 'inscription' (

    `email` varchar(40) NOT NULL,
    `mdp` varchar(40) NOT NULL,
    `pseudo` varchar(40) NOT NULL,
    `date_heure_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ('id')

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- Story 3

