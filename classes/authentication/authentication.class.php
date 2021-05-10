<?php

namespace authentication;


session_start();

use DB\DB;

class authentication extends DB
{
    public function chick_user($email, $password, $table)
    {
        $req = "SELECT personne.id_personne FROM personne INNER JOIN  $table ON personne.id_personne = $table.id_personne WHERE Email =? AND PASSWORD=? LIMIT 1";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$email, $password]);
        $count = $stmt->rowCount();
        $row = $stmt->fetch();
        $T = [];
        if ($count > 0) {
            if (strcmp($table, "client") == 0) {
                $T = array(2, $row["id_personne"]);
                return $T;
            } elseif (strcmp($table, "admin") == 0) {
                $T = array(1, $row["id_personne"]);
                return $T;
            }
        }
    }
}
