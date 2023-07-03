<?php
class Covid{
    private int  $id;
    private string  $id_region;
    private string $jour;
    private int  $n_dose1;
    private int  $n_dose2;
    private int  $n_cum_dose1;
    private int  $n_cum_dose2;
    private int  $couv_dose1;
    private int  $couv_dose2;

    function getAllVactinations(){
        $host = 'localhost';
        $db = 'bdd-exercices';
        $user = 'covid';
        $password = 'covid';
$dbh = "mysql:host=$host;dbname=$db";
        try {
            $pdo = new PDO ($dbh, $user, $password);
            if ($pdo){
            echo 'Connection OK';
            }
            
        } catch (PDOException $e) {
            echo $e->getMessage();
            
        }
    }

}
?>