<?php

class SmartphonesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllSmartphones()
    {
        $sql = 'SELECT  SMPS.Merk
                       ,SMPS.Model

                FROM   Smartphones as SMPS
                
                ORDER BY SMPS.Merk ASC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

}