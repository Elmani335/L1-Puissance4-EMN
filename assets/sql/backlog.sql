/* Story 1 */

SELECT A.*
FROM animaux as A
LEFT JOIN enclos_animaux as EA
	ON EA.id_animal = A.id
WHERE EA.date_entree < '2003-01-01'

/* Story 2*/

SELECT A.*, E.nom as enclos
FROM animaux as A
LEFT JOIN enclos_animaux as EA
	ON EA.id_animal = A.id
LEFT JOIN enclos as E
	ON E.id = EA.id_enclot
WHERE A.espece = "Girafe"

/* Story 3 */

SELECT A.*, E.niveau as niveau_enclos
FROM animaux as A
LEFT JOIN enclos_animaux as EA
	ON EA.id_animal = A.id
LEFT JOIN enclos as E
	ON E.id = EA.id_enclot
WHERE A.espece = "Orang-Outan" OR A.espece = "Lion"

/* Story 4 */

SELECT A.*, E.niveau as niveau_enclos
FROM animaux as A
LEFT JOIN enclos_animaux as EA
	ON EA.id_animal = A.id
LEFT JOIN enclos as E
	ON E.id = EA.id_enclot
WHERE
A.espece = "Elephant"
AND
taille > 130
AND
EA.date_entree < '2010-12-01'

/* Story 5 */

SELECT E.*, COUNT(EA.id) as total
FROM enclos as E
LEFT JOIN enclos_animaux as EA
  ON EA.id_enclot = E.id
WHERE E.niveau = "moyen"
GROUP BY E.id

/* Story 6 */

SELECT A.*
FROM animaux as A
LEFT JOIN enclos_animaux as EA
	ON EA.id_animal = A.id
LEFT JOIN enclos as E
	ON E.id = EA.id_enclot
WHERE A.espece = "Faucon" AND A.sexe = 'M'
ORDER BY EA.date_entree DESC

/* Story 7 */

SELECT A.*, TIMESTAMPDIFF(MONTH, EA.date_entree, NOW()) as nombre_mois
FROM animaux as A
LEFT JOIN enclos_animaux as EA
	ON EA.id_animal = A.id
LEFT JOIN enclos as E
	ON E.id = EA.id_enclot
WHERE A.espece = "Pinguin" OR A.espece = "Chèvre"
ORDER BY EA.date_entree DESC


/* Story 8 */

SELECT A.*, (SELECT SUM(taille) FROM animaux WHERE espece = A.espece) as taille_totale
FROM animaux as A
LEFT JOIN enclos_animaux as EA
	ON EA.id_animal = A.id
LEFT JOIN enclos as E
	ON E.id = EA.id_enclot
WHERE A.espece = "Zèbre" OR A.espece = "Lion" OR A.espece = "Pinguin"
ORDER BY EA.date_entree DESC

/* Story 9 */

SELECT SUM(H.montant) as montant, YEAR(H.date) as annee
FROM historique as H
GROUP BY annee
ORDER BY annee ASC

/* Story 10 */

SELECT COUNT(EA.id) as nombre_animaux, YEAR(EA.date_entree) as annee
FROM date_entree as EA
GROUP BY annee
ORDER BY annee ASC;

/* Story 11 */

SELECT A.nom, A.sexe, A.taille, A.espece, E.nom as enclos, EA.date_entree
FROM animaux as A
LEFT JOIN enclos_animaux as EA
  ON EA.id_animal = A.id
LEFT JOIN enclos as E
  ON E.id = EA.id_enclot
ORDER BY EA.date_entree ASC LIMIT 1;

/* Story 12 */

SELECT A.nom, A.sexe, A.taille, A.espece, E.nom as enclos, EA.date_entree
FROM animaux as A
LEFT JOIN enclos_animaux as EA
  ON EA.id_animal = A.id
LEFT JOIN enclos as E
  ON E.id = EA.id_enclot
ORDER BY EA.date_entree DESC LIMIT 1;

/* Story 13 */

SELECT A.nom, A.sexe, A.taille, A.espece, E.nom as enclos, TIMESTAMPDIFF(YEAR, EA.date_entree, NOW()) as age
FROM animaux as A
LEFT JOIN enclos_animaux as EA
  ON EA.id_animal = A.id
LEFT JOIN enclos as E
  ON E.id = EA.id_enclot
WHERE E.nom = "VonRueden" AND A.sexe = "F"
GROUP BY A.id
HAVING age > 4

/* Story 14 */

SELECT 	t1.annee as annee_plus_productive, t1.montant as montant_plus_productive, t1.total_animaux as animaux_annee_plus_productive,
		    t2.annee as annee_moins_productive, t2.montant as montant_moins_productive, t2.total_animaux as animaux_annee_moins_productive
FROM (
  SELECT YEAR(H.date) as annee, SUM(H.montant) as montant, COUNT(EA.id) as total_animaux
  FROM historique as H
  LEFT JOIN enclos_animaux as EA
    ON YEAR(EA.date_entree) = YEAR(H.date)
  GROUP BY annee
  ORDER BY SUM(montant) DESC LIMIT 1
) as t1,
(
  SELECT YEAR(H.date) as annee, SUM(H.montant) as montant, COUNT(EA.id) as total_animaux
  FROM historique as H
  LEFT JOIN enclos_animaux as EA
    ON YEAR(EA.date_entree) = YEAR(H.date)
  GROUP BY annee
  ORDER BY SUM(montant) ASC LIMIT 1
) as t2