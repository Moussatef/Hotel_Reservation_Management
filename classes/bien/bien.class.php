<?php

namespace bien;

use DB\DB;

class bien extends DB
{
    public function doDelete($id_bien)
    {
        $req = "UPDATE bien SET archive = 1 WHERE id_bien = ?";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$id_bien]);
    }
    public function getInfoReservation()
    {
        // $tr = '';
        $div = '';
        $req = "SELECT * FROM personne INNER JOIN  client on personne.id_personne = client.id_personne INNER JOIN reservation on client.id_client = reservation.id_client INNER JOIN chambre_res on reservation.id_reservation = chambre_res.id_reservation INNER JOIN bien on chambre_res.id_bien = bien.id_bien ";
        $stmt = $this->connect()->query($req);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function setBien($type_bien, $lit, $vue, $pension, $img, $prix)
    {
        $req = "INSERT INTO bien(Nom_Type,Type_Vue,Type_Lit,Type_Pension,PRIX,img) values(?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($req) or die(print_r($stmt->errorInfo()));
        $stmt->execute([$type_bien, $lit, $vue, $pension, $img, $prix]);
    }
    public function update_bien($id_bien)
    {
        $req = "UPDATE bien SET archive = 0 WHERE id_bien = ?";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$id_bien]);
    }
}
