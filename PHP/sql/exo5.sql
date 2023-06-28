SELECT ville_nom_reel FROM villes_france_free ORDER BY ville_population_2012 DESC LIMIT 10;

SELECT ville_nom, ville_surface FROM villes_france_free ORDER BY ville_surface ASC LIMIT 50;

SELECT `ville_nom`,`ville_code_postal` FROM `villes_france_free` WHERE `ville_code_postal` LIKE '97%';

SELECT departement.departement_nom, villes_france_free.ville_nom FROM departement INNER JOIN villes_france_free ON (departement.departement_code=villes_france_free.ville_departement) 
ORDER BY ville_population_2012 DESC LIMIT 10;

SELECT ville_departement AS 'Nouméro de département', COUNT(*) AS 'Nbre totale de villes' FROM departement d JOIN villes_france_free v ON v.ville_departement = d.departement_code GROUP BY d.departement_code;

SELECT departement_nom, SUM(ville_surface) AS surface FROM  departement d INNER JOIN villes_france_free v ON d.departement_code=v.ville_departement GROUP BY departement_nom ORDER BY surface DESC LIMIT 10;

SELECT COUNT(ville_nom_reel) FROM villes_france_free WHERE ville_nom_reel LIKE 'Saint%';

SELECT departement_nom, SUM(ville_population_2012) AS population
FROM departement d INNER JOIN villes_france_free v ON d.departement_code = v.ville_departement
GROUP BY departement_nom 
HAVING population > 2000000