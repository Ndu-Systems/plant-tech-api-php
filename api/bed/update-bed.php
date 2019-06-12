<?php
include_once '../../config/Database.php';
include_once '../../models/Bed.php';

$data = json_decode(file_get_contents("php://input"));

$Name=$data->Name;
$LocationId=$data->LocationId;
$Quantity=$data->Quantity;
$CreateUserId=$data->CreateUserId;
$ModifyUserId=$data->ModifyUserId;
$StatusId=$data->StatusId;
$BedId=$data->BedId;
//connect to db
$database = new Database();
$db = $database->connect();


$bed = new Bed($db);

$result = $bed->update(
    $Name,
    $LocationId,
    $Quantity,
    $CreateUserId,
    $ModifyUserId,
    $StatusId,
    $BedId
);
echo json_encode($result);