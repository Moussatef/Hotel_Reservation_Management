<?php

namespace reservation;

use DB\DB;

class reservation extends DB
{
    public function setReservation($idclient)
    {
        $req = "INSERT INTO reservation(id_client) values (?)";
        $stmt = $this->connect()->prepare($req) or die(print_r($stmt->errorInfo()));
        $stmt->execute([$idclient]);
    }

    public function setReservation_en($id_reservation, $id_enfant)
    {
        $req = "INSERT INTO enfant_reservation(id_reservation,id_client) VALUES (?,?)";
        $stmt = $this->connect()->prepare($req) or die(print_r($stmt->errorInfo()));
        $stmt->execute([$id_reservation, $id_enfant]);
    }

    public function getLastreserv($idclient)
    {
        $req = " SELECT id_reservation FROM reservation WHERE id_client=? ORDER BY id_reservation DESC LIMIT 1 ";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$idclient]);
        $row = $stmt->fetch();
        return $row;
    }
}
