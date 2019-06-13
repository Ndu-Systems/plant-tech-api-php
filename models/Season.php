


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
        $CreateDate,
        $ModifyUserId,
        $ModifyDate,
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
                $CreateDate,
                $ModifyUserId,
                $ModifyDate,
                $StatusId
            ))) {
                return $this->getById($SeasonId);
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    //update
    public function update(
        $Name,
        $CreateUserId,
        $CreateDate,
        $ModifyUserId,
        $ModifyDate,
        $StatusId,
        $SeasonId
    ) {
        $query = "UPDATE season
        SET 
        Name = ?,
        CreateUserId = ?,
        CreateDate = ?,
        ModifyUserId = ?,
        ModifyDate = ?,
        StatusId = ?
        ModifyDate=Now()
        Where SeasonId =?
         ";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                $Name,
                $CreateUserId,
                $CreateDate,
                $ModifyUserId,
                $ModifyDate,
                $StatusId,
                $SeasonId
        ));

            return $this->getById($SeasonId);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function getById($Id)
    {
        $query = "SELECT * FROM season WHERE SeasonId = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->execute(array($Id));

        if ($stmt->rowCount()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
}
