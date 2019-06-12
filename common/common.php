<?php

 function  getUuid(){
    $stmt = $this->conn->prepare("SELECT uuid() as Id from dual");
    $stmt->execute(array());
    return $stmt;
    }