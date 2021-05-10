<?php

namespace client;

// require 'DB.class.php';

use DB\DB;

// include 'DB.class.php';

class client extends DB
{
    public function insert_client()
    {
        $req1 = "SELECT id_personne FROM personne ORDER BY id_personne DESC LIMIT 1";
        $stmt = $this->connect()->query($req1);
        $row = $stmt->fetch();
        $ID_personne = $row["id_personne"];

        $stmt2 = $this->connect()->prepare("INSERT INTO client(id_personne) values(?)");
        $stmt2->execute([$ID_personne]);
    }

    public function insert_personne($Nom, $Prenom, $Email, $Password)
    {
        $req = "INSERT INTO personne(Nom,Prenom,Email,PASSWORD) values(?,?,?,?); ";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$Nom, $Prenom, $Email, $Password]);
        $this->insert_client();
    }

    public function getInfoReservation($ID_personne)
    {
        $req = "SELECT * FROM  client INNER JOIN reservation on client.id_client = reservation.id_client LEFT JOIN enfant on reservation.id_enfant=enfant.id_enfant  INNER JOIN chambre_res ON reservation.id_reservation = chambre_res.id_reservation INNER JOIN bien ON chambre_res.id_bien = bien.id_bien where client.id_personne = ? ";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$ID_personne]);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function getEnfant_client($ID_personne)
    {
        $req = "SELECT * FROM enfant INNER JOIN client on enfant.id_personne = client.id_client INNER JOIN reservation on enfant.id_enfant = reservation.id_enfant where client.id_personne = ? ";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$ID_personne]);
        $rows = $stmt->fetchAll();
        return $rows;
    }
}
