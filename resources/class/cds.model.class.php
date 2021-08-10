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

    // Get CD by Id
    protected function fetchCdById(int $id) {
        $sql = "SELECT * FROM ".$this->tb." WHERE ID = :id";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([":id" => $id]);
        $result = $statement->fetch();
        return $result;
    }

    // Get CD by Slug
    protected function fetchCdBySlug(string $slug) {
        $sql = "SELECT * FROM ".$this->tb." WHERE Slug = :slug";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([":slug" => $slug]);
        $result = $statement->fetch();
        return $result;
    }
}