-- Story 3

--password reset request--

UPDATE utilisateurs SET mdp = '' WHERE id ='' ;
 
--email reset request--

UPDATE utilisateurs SET email = '' WHERE id ='' AND mdp = '';

-- Story 4

SELECT * FROM utilisateurs WHERE email = '' AND mdp = ''
THEN
    CONNECT
ELSE
    ERROR

-- Story 5

INSERT INTO jeu (id, 'nom_jeu')
 VALUES
 ('id', 'Power Of Memory');

-- Story 6 

SELECT 'id_joueur','id_jeu','difficulty','score' FROM score
