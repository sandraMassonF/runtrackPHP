-- Écrivez dans le fichier “job05.sql” une requête permettant de sélectionner le prénom, le nom et la date de naissance des étudiants de sexe féminin.

SELECT 'prenom','nom','naissance' FROM 'etudiants' WHERE sexe = 'femme';