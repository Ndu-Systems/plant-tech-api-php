

<?php


class Bed
{
    //DB Stuff
    private $conn;
    //Constructor to DB

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function getBeds()
    {
        $query = "SELECT * FROM bed";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(array());
        return $stmt;
    }

    //Add
    public function add(
        $Name,
        $LocationId,
        $Quantity,
        $CreateUserId,
        $ModifyUserId,
        $StatusId
    ) {
        $id = getUuid($this->conn);
        $query = "INSERT INTO bed (
                                    BedId, 
                                    Name, 
                                    LocationId, 
                                    Quantity, 
                                    CreateUserId, 
                                    ModifyUserId, 
                                    StatusId

                                        )
                    VALUES (?,?, ?, ?, ?, ?,?)           
                   ";
        try {
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute(array(
                $id,
                $Name,
                $LocationId,
                $Quantity,
                $CreateUserId,
                $ModifyUserId,
                $StatusId
            ))) {
                return $this->getById($id);
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    //update
    public function update(
        $Name,
        $LocationId,
        $Quantity,
        $CreateUserId,
        $ModifyUserId,
        $StatusId,
        $BedId
    ) {
        $query = "UPDATE bed
        SET 
        Name = ?, 
        LocationId=?, 
        Quantity=?, 
        CreateUserId=?, 
        ModifyUserId=?, 
        StatusId=?,
        ModifyDate = NOW()
        Where
        BedId=?
         ";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array($Name,
            $LocationId,
            $Quantity,
            $CreateUserId,
            $ModifyUserId,
            $StatusId,
            $BedId));

            return $this->getById($BedId);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function getById($BedId)
    {
        $query = "SELECT * FROM bed WHERE BedId = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->execute(array($BedId));

        if ($stmt->rowCount()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
}
