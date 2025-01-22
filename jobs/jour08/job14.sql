-- Écrivez dans le fichier “job14.sql” une requête permettant de sélectionner le prénom, le nom et la date de naissance des étudiants qui sont nés entre 1998 et 2018.

SELECT nom, prenom, naissance FROM etudiants WHERE YEAR(naissance) BETWEEN '1998' AND '2018';