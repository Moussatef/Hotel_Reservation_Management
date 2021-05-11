<?php
require '../includs/autoload.inc.php';
session_start();

use bien\bien;
use bien_reservation\bien_reservation;
use enfant\enfant;
use reservation\reservation;

$chambre_res = new bien_reservation;
$reservation = new reservation;
$bienx = new bien;
$enfantx = new enfant;
// && isset($_POST["lit"]) && isset($_POST["vue"]) && isset($_POST["pension"])
if (!empty($_SESSION['ID_PClient'])) {
    $idclient = $_SESSION['ID_PClient'];
    if (isset($_POST["bien"]) && !empty($_POST["bien"]) && $_POST["prix"] != 0 && isset($_POST["Lit"]) && strcmp($_POST["Lit"], "Null") != 0) {
        $bien = $_POST["bien"];
        $lit = isset($_POST["Lit"]) ? $_POST["Lit"] : "Null";
        $vue = isset($_POST["Vue"]) ? $_POST["Vue"] : "Null";
        $img_bien = $_POST["img_bien"];
        $pension = isset($_POST["pension"]) ? $_POST["pension"] : "Null";
        $prix = $_POST["prix"];
        $nb_jour = $_POST["NB_Jour"];
        if ((isset($_POST["nb_bambin"]) && isset($_POST["select_bambin"])) || (isset($_POST["nb_enfant"]) && isset($_POST["select_enfant"])) || (isset($_POST["nb_adulte"]) && isset($_POST["select_adulte"]))) {
            if (($_POST["nb_bambin"] != 0 || $_POST["nb_enfant"] != 0 || $_POST["nb_adulte"] != 0) && (strcmp($_POST["select_bambin"], "Null") != 0 || strcmp($_POST["select_enfant"], "Null") != 0 || strcmp($_POST["select_adulte"], "Null") != 0)) {

                $nb_bambin = !empty($_POST["nb_bambin"]) ? $_POST["nb_bambin"] : 0;
                $nb_enfant = !empty($_POST["nb_enfant"]) ? $_POST["nb_enfant"] : 0;
                $nb_adulte = !empty($_POST["nb_adulte"]) ? $_POST["nb_adulte"] : 0;
                $select_bambin = isset($_POST["select_bambin"]) ? $_POST["select_bambin"] : "NULL";
                $select_enfant = isset($_POST["select_enfant"]) ? $_POST["select_enfant"] : "NULL";
                $select_adulte = isset($_POST["select_adulte"]) ? $_POST["select_adulte"] : "NULL";
                if ($_POST["cmp"] == 0 || $_POST["cmp"] == 1) {
                    $enfantx->insert_enfant($idclient, $nb_bambin, $nb_enfant, $nb_adulte, $select_bambin, $select_enfant, $select_adulte);
                    $rowE = $enfantx->getLastEnfant($idclient);
                    $reservation->setReservation_en($idclient, $rowE["id_enfant"]);
                    $bienx->setBien($bien, $vue, $lit, $pension, $prix, $img_bien);
                    $row =  $chambre_res->list_bien_reservation();
                    echo '<div class="alert alert-success mt-2" role="alert"><p> success reserve bien </p></div>';
                    echo '<div class="alert alert-success mt-2" role="alert"><p> success insert enfant  </p></div>';
                    $chambre_res->insert_bien_res($row["id_bien"], $row["id_reservation"], $nb_jour);
                } else if ($_POST["cmp"] > 1) {
                    $enfantx->insert_enfant($idclient, $nb_bambin, $nb_enfant, $nb_adulte, $select_bambin, $select_enfant, $select_adulte);
                    $rowE = $enfantx->getLastEnfant($idclient);
                    $bienx->setBien($bien, $vue, $lit, $pension, $prix, $img_bien);
                    $row =  $chambre_res->list_bien_reservation();
                    $chambre_res->insert_bien_res($row["id_bien"], $row["id_reservation"], $nb_jour);
                    echo '<div class="alert alert-success mt-2" role="alert"><p> success reserve bien </p></div>';
                    echo '<div class="alert alert-success mt-2" role="alert"><p> success insert enfant  </p></div>';
                }
            } else

                echo '<div class="alert alert-danger mt-2" role="alert"><p> dir chi 7araka  </p></div>';
        } else {
            if ($_POST["cmp"] == 0 || $_POST["cmp"] == 1) {
                $bienx->setBien($bien, $vue, $lit, $pension, $prix, $img_bien);
                $reservation->setReservation($idclient);
                $row =  $chambre_res->list_bien_reservation();
                $chambre_res->insert_bien_res($row["id_bien"], $row["id_reservation"], $nb_jour);
                echo '<div class="alert alert-success mt-2" role="alert"><p> success reserve bien </p></div>';
                echo '<div class="alert alert-success mt-2" role="alert"><p> success reservation  </p></div>';
            } else if ($_POST["cmp"] > 1) {
                $bienx->setBien($bien, $vue, $lit, $pension, $prix, $img_bien);
                $row =  $chambre_res->list_bien_reservation();
                $chambre_res->insert_bien_res($row["id_bien"], $row["id_reservation"], $nb_jour);
                echo '<div class="alert alert-success mt-2" role="alert"><p> success reserve bien </p></div>';
                echo '<div class="alert alert-success mt-2" role="alert"><p> success reservation  </p></div>';
            }
        }
    } else {
        echo '<div class="alert alert-danger mt-2" role="alert"><p>choose for reserv !! </p></div> ';
    }
} else {
    echo '<div class="alert alert-danger mt-2" role="alert"><p> Login First or inscri !!!</p></div> ';
}
