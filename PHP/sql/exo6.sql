-- 1 --

SELECT 
    *
FROM
    lpecom_livres;
	
-- 2 --

SELECT 
    *
FROM
    lpecom_livres
WHERE
    prix > 20;
	
-- 3 --

SELECT 
    *
FROM
    lpecom_livres
ORDER BY prix ASC;

-- 4 --

SELECT 
    MAX(prix)
FROM
    lpecom_livres;
	
-- 5 --

SELECT 
    *
FROM
    lpecom_livres
WHERE
    prix BETWEEN 20 AND 22;
	
-- 5 --
	
SELECT 
    *
FROM
    lpecom_livres
WHERE
    isbn_10 != 2092589547;