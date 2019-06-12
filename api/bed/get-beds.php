<?php
 include_once '../../config/Database.php';
 include_once '../../models/Bed.php';

 //connect to db
$database = new Database();
$db = $database->connect();

// instantiate investment object
$bed = new Bed($db);

$result = $bed->getBeds();
$outPut = array();

if($result->rowCount()){
    $documents = $result->fetchAll(PDO::FETCH_ASSOC);
    $outPut = $documents;

}
echo json_encode($outPut);

