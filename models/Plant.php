

<?php


class Plant
{
    //DB Stuff
    private $conn;
    //Constructor to DB

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function getPlants()
    {
        $query = "SELECT * FROM plant";

        //Prepare statement
        $stmt = $this->conn->prepare($query);

        //Execute query
        $stmt->execute(array());

        return $stmt;
    }

    //Add
    public function add(
        $Name,
        $Description,
        $Views,
        $MedicineId,
        $CreateUserId,
        $ModifyUserId,
        $StatusId
    ) {
        $PlantId = getUuid($this->conn);
        $query = "INSERT INTO plant (
                                    PlantId,
                                    Name,
                                    Description,
                                    Views,
                                    MedicineId,
                                    CreateUserId,
                                    ModifyUserId,
                                    StatusId

                                        )
                    VALUES (?,?, ?, ?, ?, ?,?,?)           
                   ";
        try {
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute(array(
                $PlantId,
                $Name,
                $Description,
                $Views,
                $MedicineId,
                $CreateUserId,
                $ModifyUserId,
                $StatusId
            ))) {
                return $this->getById($PlantId);
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    //update
    public function update(
        $Name,
        $Description,
        $Views,
        $MedicineId,
        $CreateUserId,
        $ModifyUserId,
        $StatusId,
        $PlantId

    ) {
        $query = "UPDATE plant
        SET 
        Name=?,
        Description=?,
        Views=?,
        MedicineId=?,
        CreateUserId=?,
        ModifyUserId=?,
        StatusId=?
        Where
        PlantId=?
         ";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                $Name,
                $Description,
                $Views,
                $MedicineId,
                $CreateUserId,
                $ModifyUserId,
                $StatusId,
                $PlantId
        ));

            return $this->getById($PlantId);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function getById($PlantId)
    {
        $query = "SELECT * FROM plant WHERE PlantId = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->execute(array($PlantId));

        if ($stmt->rowCount()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
}
