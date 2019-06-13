


<?php


class Season
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
        $query = "SELECT * FROM season";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(array());
        return $stmt;
    }

    //Add
    public function add(
        $Name,
        $CreateUserId,
        $ModifyUserId,
        $StatusId
    ) {
        $SeasonId = getUuid($this->conn);
        $query = "INSERT INTO season (
                                   SeasonId,
                                    Name,
                                    CreateUserId,
                                    ModifyUserId,
                                    StatusId
                                        )
                    VALUES (?,?, ?, ?, ?)           
                   ";
        try {
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute(array(
                $SeasonId,
                $Name,
                $CreateUserId,
                $ModifyUserId,
                $StatusId
            ))) {
                return $this->getById($this->conn->lastInsertId());
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    //update
    public function update(
        $Name,
        $CreateUserId,
        $ModifyUserId,
        $StatusId,
        $SeasonId
    ) {
        $query = "UPDATE season
        SET 
        Name = ?,
        CreateUserId = ?,
        ModifyUserId = ?,
        StatusId = ?,
        ModifyDate=Now()
        Where SeasonId =?
         ";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                $Name,
                $CreateUserId,
                $ModifyUserId,
                $StatusId,
                $SeasonId
        ));

            return $this->getById($SeasonId);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function getById($SeasonId)
    {
        $query = "SELECT * FROM season WHERE SeasonId = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->execute(array($SeasonId));

        if ($stmt->rowCount()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
}
