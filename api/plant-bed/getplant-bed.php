<?php
 include_once '../../config/Database.php';
 include_once '../../models/Plantbed.php';

 //connect to db
$database = new Database();
$db = $database->connect();

$plantbed = new Plantbed($db);

$result = $plantbed->getAll();
$outPut = array();

if($result->rowCount()){
    $beds = $result->fetchAll(PDO::FETCH_ASSOC);
    $outPut = $beds;

}
echo json_encode($outPut);

