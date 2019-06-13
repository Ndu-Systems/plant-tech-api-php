<?php
include_once '../../config/Database.php';
include_once '../../models/Plantbed.php';

$data = json_decode(file_get_contents("php://input"));

$PlantId=$data->PlantId;
$BedId=$data->BedId;
$CreateUserId=$data->CreateUserId;
$ModifyUserId=$data->ModifyUserId;
$StatusId=$data->StatusId;
//connect to db
$database = new Database();
$db = $database->connect();


$plantbed = new Plantbed($db);

$result = $plantbed->add(
    $PlantId,
    $BedId,
    $CreateUserId,
    $ModifyUserId,
    $StatusId
);
echo json_encode($result);