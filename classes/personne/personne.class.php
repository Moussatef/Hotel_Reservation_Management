<?php

namespace personne;

use DB\DB;

class personne extends DB
{

    public function getClient($ID_personne)
    {
        $req = "SELECT * FROM personne INNER JOIN client on personne.id_personne = client.id_personne INNER JOIN reservation on client.id_client = reservation.id_client INNER JOIN chambre_res on reservation.id_reservation = chambre_res.id_reservation INNER JOIN bien on chambre_res.id_bien = bien.id_bien where personne.id_personne = ? ";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$ID_personne]);
        $row = $stmt->fetch();
        return  $row;
    }

    public function getInfoPersonnel($ID_personne)
    {
        $req = "SELECT * FROM personne  where personne.id_personne = ? ";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute([$ID_personne]);
        $row = $stmt->fetch();

        return '<h3 class="text-uppercase text-wrap">' . $row["Nom"] . ' ' . $row["Prenom"] . '</h3>
                        <h5>' . $row["Email"] . ' </h5>
                        <p class="card-text"><small class="text-muted">Date inscription : ' . $row["Date_inscr"] . '</small></p>';
    }
}
