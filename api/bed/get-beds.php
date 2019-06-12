<?php
 include_once '../../config/Database.php';
 include_once '../../models/Bed.php';

 //connect to db
$database = new Database();
$db = $database->connect();

$bed = new Bed($db);

$result = $bed->getBeds();
$outPut = array();

if($result->rowCount()){
    $beds = $result->fetchAll(PDO::FETCH_ASSOC);
    $outPut = $beds;

}
echo json_encode($outPut);

