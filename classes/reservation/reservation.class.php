<?php

namespace reservation;

use DB\DB;

class reservation extends DB
{
    public function setReservation($idclient)
    {
        $req = "INSERT INTO reservation(id_client) values (?)";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$idclient]);
    }
    public function setReservation_en($idclient, $id_enfant)
    {
        $req = "INSERT INTO reservation(id_client,id_enfant) values (?,?)";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$idclient, $id_enfant]);
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
