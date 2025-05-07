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

    public function create($data)
    {
        $sql = "INSERT INTO Zangeres (Naam, Nettowaarde, Land, Mobiel, Leeftijd)
                VALUES (:naam, :nettowaarde, :land, :mobiel, :leeftijd)";

        $this->db->query($sql);
        $this->db->bind(':naam', $data['naam']);
        $this->db->bind(':nettowaarde', $data['nettowaarde']);
        $this->db->bind(':land', $data['land']);
        $this->db->bind(':mobiel', $data['mobiel']);
        $this->db->bind(':leeftijd', $data['leeftijd']);

        return $this->db->execute();
    }

}