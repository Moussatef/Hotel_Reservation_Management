<?php

namespace admin;

use DB\DB;

class admin extends DB
{


    public function getNbClient()
    {
        $req = "SELECT COUNT(*) from client";
        $stmt = $this->connect()->query($req);
        $row = $stmt->fetch();
        return $row;
    }
    public function getNB_reservation()
    {
        $req = "SELECT COUNT(*) FROM reservation";
        $stmt = $this->connect()->query($req);
        $row = $stmt->fetch();
        return $row;
    }
    public function gettotalDH()
    {
        $req = "SELECT SUM(PRIX) FROM bien";
        $stmt = $this->connect()->query($req);
        $row = $stmt->fetch();
        return $row;
    }
}
