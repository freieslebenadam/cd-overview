<?php

class CdsView extends CdsModel {

    // Get all CDs
    public function getAllCds() {
        $result = $this->fetchAllCds();
        return $result;
    }
}