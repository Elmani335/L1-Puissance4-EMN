SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Story 1

DROP TABLE IF EXISTS 'utilisateur';

CREATE TABLE IF NOT EXISTS utilisateurs (

    `identifiant` varchar(40) NOT NULL,
    `email`varchar(60) NOT NULL,
    `mdp` varchar(40) NOT NULL,
    `pseudo` varchar(40) NOT NULL,
    `date-heure-inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `date-heure-derniere-connexion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ('id')

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS 'score';

CREATE TABLE IF NOT EXISTS 'score' (

    `identifiant` varchar(40) NOT NULL,
    `identifiant-joueur` varchar(40) NOT NULL,
    `identifiant-jeu` varchar(40) NOT NULL,
    `difficulte-partie` int(1) NOT NULL AUTO_INCREMENT,
    `score-partie` int(10) NOT NULL AUTO_INCREMENT,
    `date-heure-partie` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ('id')

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS 'message-chat';

CREATE TABLE IF NOT EXISTS 'message-chat' (

    `identifiant` varchar(40) NOT NULL,
    `identifiant-jeu` varchar(40) NOT NULL,
    `identifiant-expediteur` varchar(40) NOT NULL,
    `message` varchar(200) NOT NULL,
    `date-heure-message` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ('id')

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS 'jeu';

CREATE TABLE IF NOT EXISTS 'jeu' (

    `identifiant` varchar(40) NOT NULL,
    `nom-jeu` varchar(40) NOT NULL,
    PRIMARY KEY ('id')

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- Story 2

DROP TABLE IF EXISTS 'inscription';

CREATE TABLE IF NOT EXISTS 'inscription' (

    `email` varchar(40) NOT NULL,
    `mdp` varchar(40) NOT NULL,
    `pseudo` varchar(40) NOT NULL,
    `date-heure-inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ('id')

) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- Story 3