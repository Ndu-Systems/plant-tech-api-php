<?php
include_once '../../config/Database.php';
include_once '../../models/Plant.php';

$data = json_decode(file_get_contents("php://input"));

$Name=$data->Name;
$Name=$data->Name;
$Description=$data->Description;
$Views=$data->Views;
$MedicineId=$data->MedicineId;
$CreateUserId=$data->CreateUserId;
$ModifyUserId=$data->ModifyUserId;
$StatusId=$data->StatusId;
//connect to db
$database = new Database();
$db = $database->connect();


$plant = new Plant($db);

$result = $plant->add(
    $Name,
    $Description,
    $Views,
    $MedicineId,
    $CreateUserId,
    $ModifyUserId,
    $StatusId
);
echo json_encode($result);