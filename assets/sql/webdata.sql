SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Story 1 crée table utilisateur / score / message / jeu  --



CREATE TABLE utilisateurs (

    `id` int(11) NOT NULL,
    `email` varchar(60) NOT NULL,
    `mdp` varchar(40) NOT NULL,
    `pseudo` varchar(40) NOT NULL,
    `date_heure_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `date_heure_derniere_connexion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;


CREATE TABLE score (

    `id` int(11) NOT NULL AUTO_INCREMENT,
    `id_joueur` int(11) NOT NULL,
    `id_jeu` int(11) NOT NULL,
    `difficulty` int(1) NOT NULL,
    `score` int(10) NOT NULL,
    `date-heure_partie` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;


CREATE TABLE `message-chat` (

    `id` int(11) NOT NULL,
    `id_jeu` int(11) NOT NULL,
    `identifiant_expediteur` int(11) NOT NULL,
    `message` text(200) NOT NULL,
    `date_heure_message` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;


CREATE TABLE jeu (

    `id` int(11) NOT NULL,
    `nom_jeu` varchar(40) NOT NULL,
    PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- Story 2 --


CREATE TABLE inscription (
	`id` int(11) NOT NULL,
    `email` varchar(40) NOT NULL,
    `mdp` varchar(40) NOT NULL,
    `pseudo` varchar(40) NOT NULL,
    `date_heure_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- Story 3 --