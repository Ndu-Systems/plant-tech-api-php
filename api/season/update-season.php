<?php
include_once '../../config/Database.php';
include_once '../../models/Season.php';

$data = json_decode(file_get_contents("php://input"));


$Name =$data->Name;
$CreateUserId =$data->CreateUserId;
$ModifyUserId =$data->ModifyUserId;
$StatusId =$data->StatusId;
$SeasonId =$data->SeasonId;
//connect to db
$database = new Database();
$db = $database->connect();


$season = new Season($db);

$result = $season->update(
    $Name,
    $CreateUserId,
    $ModifyUserId,
    $StatusId,
    $SeasonId
);
echo json_encode($result);