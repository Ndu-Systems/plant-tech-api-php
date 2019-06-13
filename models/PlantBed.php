

<?php


class Plantbed
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
        $query = "SELECT * FROM plantbed";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(array());
        return $stmt;
    }

    //Add
    public function add(
        $PlantId,
        $BedId,
        $CreateUserId,
        $ModifyUserId,
        $StatusId
    ) {
        $Id = getUuid($this->conn);
        $query = "INSERT INTO plantbed (
                                   Id,
                                    PlantId,
                                    BedId,
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
                $BedId,
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
                $BedId,
                $CreateUserId,
                $ModifyUserId,
                $StatusId,
                $Id
    ) {
        $query = "UPDATE plantbed
        SET 
        PlantId =?,
        BedId =?,
        CreateUserId =?,
        ModifyUserId =?,
        StatusId =?,
        ModifyDate=Now()
        Where Id =?
         ";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                $PlantId,
                $BedId,
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
        $query = "SELECT * FROM plantbed WHERE Id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->execute(array($Id));

        if ($stmt->rowCount()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
}
