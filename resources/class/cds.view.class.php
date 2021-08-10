<?php

class CdsView extends CdsModel {

    // Get all CDs
    public function getAllCds() {
        $result = $this->fetchAllCds();
        return $result;
    }

    // Get CD by ID
    public function getCdById(int $id) {
        $result = $this->fetchCdById($id);
        return $result;
    }
}