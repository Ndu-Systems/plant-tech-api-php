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
//connect to db
$database = new Database();
$db = $database->connect();


$bed = new Bed($db);

$result = $bed->add(
    $Name, 
    $LocationId, 
    $Quantity, 
    $CreateUserId, 
    $ModifyUserId, 
    $StatusId
);
echo json_encode($result);