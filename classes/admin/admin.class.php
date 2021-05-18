<?php

namespace admin;

use DB\DB;

class admin extends DB
{


    public function getNbClient()
    {
        $req = "SELECT COUNT(*) AS NB from client";
        $stmt = $this->connect()->query($req);
        $row = $stmt->fetch();
        return $row;
    }
    public function getNB_reservation()
    {
        $req = "SELECT COUNT(*) AS NB FROM reservation";
        $stmt = $this->connect()->query($req);
        $row = $stmt->fetch();
        return $row;
    }
    public function getTotalDH()
    {
        $req = "SELECT SUM(PRIX) AS DH FROM bien";
        $stmt = $this->connect()->query($req);
        $row = $stmt->fetch();
        return $row;
    }
    public function get_client()
    {
        $req = "SELECT * FROM personne INNER JOIN client ON personne.id_personne = client.id_personne";
        $stmt = $this->connect()->query($req);
        $row = $stmt->fetchAll();
        return $row;
    }
}
