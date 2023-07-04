<?php
class Repart{
    private int  $id;
    private string  $id_region;
    private string $jour;
    private int  $n_dose1;
    private int  $n_dose2;
    private int  $n_cum_dose1;
    private int  $n_cum_dose2;
    private int  $couv_dose1;
    private int  $couv_dose2;

    public static function getVactinationsRepart() : array{
        $pdo = Database::getInstancePDO();

        $sql = "SELECT 
        `t`.`nom` AS 'vaccin_name' ,
        `v`.`dep_code` AS 'departament_code',
        `d`.`name` AS 'departament_name',
        MAX(`v`.`n_cum_dose1`) AS 'total_dose1',
        MAX(`v`.`n_cum_dose2`) AS 'total_dose2'
    FROM
        `bdd-exercices`.`lpecom_covid_vaccin` v
            INNER JOIN
        `bdd-exercices`.`lpecom_covid_vaccin_type` t ON v.`vaccin` = `t`.`id`
            INNER JOIN
        `bdd-exercices`.`lpecom_departments` d ON v.`dep_code` = `d`.`code`
    GROUP BY t.nom,`v`.`dep_code` ";
        
        $pdo_statement = $pdo->query($sql);
        $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}