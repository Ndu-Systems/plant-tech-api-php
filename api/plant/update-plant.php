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
$PlantId=$data->PlantId;
//connect to db
$database = new Database();
$db = $database->connect();

//Instantiate user object

$plant = new Plant($db);

$result = $plant->update(
    $Name,
        $Description,
        $Views,
        $MedicineId,
        $CreateUserId,
        $ModifyUserId,
        $StatusId,
        $PlantId
);
echo json_encode($result);