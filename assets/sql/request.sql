-- Story 3

--password reset request--

UPDATE utilisateurs SET mdp = '' WHERE id ='' ;
 
--email reset request--

UPDATE utilisateurs SET email = '' WHERE id ='' AND mdp = '';

-- Story 4 --

SELECT * FROM utilisateurs WHERE email = '$' AND mdp = ''


-- Story 5

INSERT INTO jeu (id, `nom_jeu`)
 VALUES
 ('id', 'Power Of Memory');

-- Story 6 --

SELECT 'id_joueur','id_jeu','difficulty','score' FROM score

-- Story 7 --

SELECT 'id_jeu','pseudo','difficulty','score' FROM score AND FROM jeu AND FROM utilisateurs

-- Story 8 --

UPDATE score SET score = '' WHERE id_joueur = '' AND id_jeu = '' AND difficulty = '';

-- Story 9 --

INSERT INTO message_chat VALUES ('id', 'id_jeu', 'identifiant_expediteur', 'message', 'date_heure_message');

-- Story 10 --

SELECT 'id_jeu','identifiant_expediteur','message','date_heure_message' FROM message_chat AND jeu AND utilisateurs