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
                       ,SMPS.Prijs
                       ,SMPS.Geheugen
                       ,SMPS.Besturingssysteem

                FROM   Smartphones as SMPS
                
                ORDER BY SMPS.Prijs DESC, SMPS.Geheugen DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

}