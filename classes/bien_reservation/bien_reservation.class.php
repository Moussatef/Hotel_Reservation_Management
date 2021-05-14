<?php

namespace bien_reservation;

use DB\DB;

class bien_reservation extends DB
{
    public function list_bien_reservation()
    {
        $req = " SELECT id_bien , id_reservation  from bien , reservation   ORDER BY id_bien DESC , id_reservation  DESC  LIMIT 1";
        $stmt = $this->connect()->query($req);
        $row = $stmt->fetch();
        return $row;
    }
    public function insert_bien_res($id_bien, $id_reservation, $nb_jour)
    {
        $req = "INSERT INTO chambre_res values(?,?,?)";
        $stmt = $this->connect()->prepare($req) or die(print_r($stmt->errorInfo()));
        $stmt->execute([$id_bien, $id_reservation, $nb_jour]);
    }
}
