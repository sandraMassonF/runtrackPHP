-- Écrivez dans le fichier “job09.sql” une requête permettant de sélectionner l’ensemble des informations des étudiants qui ont moins de 18 ans.

SELECT * FROM etudiants WHERE (YEAR(CURRENT_DATE) - YEAR(naissance) - (RIGHT(CURRENT_DATE, 5) < RIGHT(naissance, 5))) <= 18;