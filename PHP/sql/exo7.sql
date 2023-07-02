-- 1 --

SELECT DISTINCT
    id_etudiant
FROM
    lpecom_examens

-- 2 --

SELECT 
    COUNT(DISTINCT id_etudiant)
FROM
    lpecom_examens
	
-- 3 --

SELECT 
    AVG(note)
FROM
    lpecom_examens
WHERE
    id_examen = 45
	
-- 4 --
	
SELECT 
    MAX(note)
FROM
    lpecom_examens
WHERE
    id_examen = 87
	
-- 5 --

SELECT DISTINCT
    id_etudiant
FROM
    lpecom_examens
WHERE
    (id_examen = 87 AND note > 11)
        OR (id_examen = 45 AND note > 12)
		
-- 6 --

SELECT DISTINCT
    *
FROM
    lpecom_examens ex
        LEFT JOIN
    lpecom_etudiants et ON ex.id_etudiant = et.id_etudiant

-- 7 --

SELECT DISTINCT
    *
FROM
    lpecom_examens ex
        INNER JOIN
    lpecom_etudiants et ON ex.id_etudiant = et.id_etudiant
	
-- 8 --

SELECT 
    et.nom, et.prenom, AVG(ex.note)
FROM
    lpecom_examens ex
        INNER JOIN
    lpecom_etudiants et ON ex.id_etudiant = et.id_etudiant
WHERE
    et.id_etudiant = 30
	
-- 9 --

SELECT 
    ex.matiere, et.nom, et.prenom
FROM
    lpecom_examens ex
        INNER JOIN
    lpecom_etudiants et ON ex.id_etudiant = et.id_etudiant
ORDER BY ex.note DESC
LIMIT 3