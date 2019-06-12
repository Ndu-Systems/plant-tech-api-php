<?php
 include_once '../../config/Database.php';
 include_once '../../models/Plant.php';

 //connect to db
$database = new Database();
$db = $database->connect();

$plant = new Plant($db);

$result = $plant->getPlants();
$outPut = array();

if($result->rowCount()){
    $plants = $result->fetchAll(PDO::FETCH_ASSOC);
    $outPut = $plants;

}
echo json_encode($outPut);

