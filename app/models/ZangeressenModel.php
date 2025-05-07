<?php

class ZangeressenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllZangeressen()
    {
        $sql = 'SELECT  ZGRS.Id
                       ,ZGRS.Naam
                       ,ZGRS.Nettowaarde
                       ,ZGRS.Land
                       ,ZGRS.Mobiel
                       ,ZGRS.Leeftijd

                FROM   Zangeres as ZGRS
                
                ORDER BY ZGRS.Leeftijd DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function delete($Id)
    {
        $sql = "DELETE 
                FROM Zangeres
                WHERE Id = :Id";

        $this->db->query($sql);
        $this->db->bind(':Id', $Id, PDO::PARAM_INT);
        return $this->db->execute();
    }

}