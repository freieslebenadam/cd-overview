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

    // Get CD by Slug
    public function getCdBySlug(string $slug) {
        $result = $this->fetchCdBySlug($slug);
        return $result;
    }
}