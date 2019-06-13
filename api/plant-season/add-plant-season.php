<?php
include_once '../../config/Database.php';
include_once '../../models/PlantSeason.php';

$data = json_decode(file_get_contents("php://input"));

$PlantId=$data->PlantId;
$SeasonId=$data->SeasonId;
$CreateUserId=$data->CreateUserId;
$ModifyUserId=$data->ModifyUserId;
$StatusId=$data->StatusId;
//connect to db
$database = new Database();
$db = $database->connect();


$plantSeason = new PlantSeason($db);

$result = $plantSeason->add(
    $PlantId,
    $SeasonId,
    $CreateUserId,
    $ModifyUserId,
    $StatusId
);
echo json_encode($result);