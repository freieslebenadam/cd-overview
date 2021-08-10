<?php

class CdsModel extends Database {
    // Default table name for this model
    private $tb = "`cds`";

    // Get all CDs from database
    protected function fetchAllCds() {
        $sql = "SELECT * FROM ".$this->tb;
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}