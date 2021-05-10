<?php

namespace enfant;

use DB\DB;

class enfant extends DB
{
    public function insert_enfant(int $id_client, int $bambin, int $enfant, int $adulte, $bambin_choix, $enfant_choix, $adulte_choix)
    {
        $req = "INSERT INTO enfant(id_personne,bambin,enfant,adulte,bambin_choix,enfant_choix,adulte_choix) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$id_client, $bambin, $enfant, $adulte, $bambin_choix, $enfant_choix, $adulte_choix]) or die(print_r($stmt->errorInfo()));
    }

    public function getenfant($id_client)
    {
        $req = "SELECT  * FROM enfant WHERE id_personne = ?";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$id_client]);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function getLastEnfant($idclient)
    {
        $req = " SELECT id_enfant FROM enfant WHERE id_personne=? ORDER BY id_enfant DESC LIMIT 1 ";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$idclient]);
        $row = $stmt->fetch();
        return $row;
    }
}
