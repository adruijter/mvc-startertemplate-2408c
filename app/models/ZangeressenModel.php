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

    public function deleteZangeres($id)
    {
        $sql = 'DELETE FROM Zangeres WHERE Id = :id';

        $this->db->query($sql);
        $this->db->bind(':id', $id, PDO::PARAM_INT);

        return $this->db->execute();
    }

}