-- Écrivez dans le fichier “job06.sql” une requête permettant de sélectionner l’ensemble des informations des étudiants dont prénom commence par un “T”.

SELECT * FROM etudiants WHERE prenom LIKE 'T%';