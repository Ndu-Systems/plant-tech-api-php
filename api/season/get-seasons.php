<?php
 include_once '../../config/Database.php';
 include_once '../../models/Season.php';

 //connect to db
$database = new Database();
$db = $database->connect();

$season = new Season($db);

$result = $season->getAll();
$outPut = array();

if($result->rowCount()){
    $plants = $result->fetchAll(PDO::FETCH_ASSOC);
    $outPut = $plants;

}
echo json_encode($outPut);

