


<?php


class PlantSeason
{
    //DB Stuff
    private $conn;
    //Constructor to DB

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function getAll()
    {
        $query = "SELECT * FROM plantseason";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(array());
        return $stmt;
    }

    //Add
    public function add(
        $PlantId,
        $SeasonId,
        $CreateUserId,
        $ModifyUserId,
        $StatusId
    ) {
        $Id = getUuid($this->conn);
        $query = "INSERT INTO plantseason (
                                      Id,
                                        PlantId,
                                        SeasonId,
                                        CreateUserId,
                                        ModifyUserId,
                                        StatusId
                                        )
                    VALUES (?,?, ?, ?, ?, ?)           
                   ";
        try {
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute(array(
                $Id,
                $PlantId,
                $SeasonId,
                $CreateUserId,
                $ModifyUserId,
                $StatusId
            ))) {
                return $this->getById($Id);
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    //update
    public function update(
        $PlantId,
        $SeasonId,
        $CreateUserId,
        $ModifyUserId,
        $StatusId,
        $Id
    ) {
        $query = "UPDATE plantseason
        SET 
        PlantId = ?,
        SeasonId = ?,
        CreateUserId = ?,
        ModifyUserId = ?,
        StatusId = ?
        ModifyDate=Now()
        Where Id =?
         ";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                $PlantId,
                $SeasonId,
                $CreateUserId,
                $ModifyUserId,
                $StatusId,
                $Id
        ));

            return $this->getById($Id);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function getById($Id)
    {
        $query = "SELECT * FROM plantseason WHERE Id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->execute(array($Id));

        if ($stmt->rowCount()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
}
