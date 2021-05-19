<?php
require '../includs/autoload.inc.php';

use client\client;
use personne\personne;

session_start();
$row = "";
if (!empty($_SESSION["ID_PClient"])) {

    $personne = new personne;
    $client = new client;
    $row1 = $personne->getInfoPersonnel($_SESSION["ID_PClient"]);
    $row2 = $client->getInfoReservation($_SESSION["ID_PClient"]);
    $row3 = $client->getEnfant_client($_SESSION["ID_PClient"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <title>Document</title>
</head>
<?php include '../includs/headre.php'; ?>

<body>
    <div class="container">
        <div class="row">
            <div class="mt-5">

            </div>

            <div class="col-lg-12 col-md-12  mt-5 ">

                <div class="row">
                    <hr>
                    <div class="col-lg-3 col-md-4 col-sm-12 ">
                        <img src="../img/user.jpg" width="220px" height="250px" alt="">
                    </div>
                    <div class="col-lg-9 col-md-4 col-sm-12 ">
                        <h2 class="text-muted border-1 border-bottom border-secondary ">Client </h2>
                        <?php echo $row1; ?>
                    </div>
                </div>

            </div>

            <hr>
        </div>
    </div>

    <div class="container mt-4  ">
        <div class="row ms-3  mt-4 ">
            <?php
            foreach ($row2 as $row) {
                if ($row["archive"] == 0) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5 ">
                        <div class="card w-65">
                            <img src="<?php echo $row["img"] ?> " width="250px" height="250px" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Bien Info</h5>

                                <span class="badge rounded-pill bg-warning  float-end">NO VALIDER</span>
                                <hr>
                                <p class="card-text"><b>Bien :</b> <?php echo $row["Nom_Type"] ?></p>
                                <p class="card-text"><b>Type de lit :</b> <?php echo $row["Type_Lit"] ?></p>
                                <p class="card-text"><b>Type vue :</b> <?php echo $row["Type_Vue"] ?></p>
                                <p class="card-text"><b>Type pension :</b> <?php echo $row["Type_Pension"] ?></p>
                                <p class="card-text"><b>Prix :</b> <?php echo $row["PRIX"] ?> DH</p>
                                <p class="card-text"><b>Nombre des Jours :</b> <?php echo $row["NB_Jour"] ?></p>
                                <hr>
                                <?php if (!empty($row["id_enfant"])) { ?>
                                    <h5 class="card-title">Enfant info</h5>
                                    <p class="card-text"><b>N°_ Bambin :</b> <?php echo $row["bambin"] ?><b> / Choix :</b> <?php echo $row["bambin_choix"] ?></p>
                                    <p class="card-text"><b>N°_ Enfant :</b> <?php echo $row["enfant"] ?> <b> / Choix :</b><?php echo $row["enfant_choix"] ?></p>
                                    <p class="card-text"><b>N°_ Adulte :</b> <?php echo $row["adulte"] ?><b> / Choix :</b> <?php echo $row["adulte_choix"] ?></p>
                                    <hr>
                                <?php } ?>

                                <a href="../controller/controller.php?del=<?php echo $row["id_bien"] ?>" class="btn rounded-pill btn-danger float-end ms-2"><i class="fas fa-trash"></i></a>
                                <a href="../controller/controller.php?del=<?php echo $row["id_bien"] ?>" class="btn rounded-pill btn-secondary  float-end"><i class="far fa-edit"></i></a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Date reservation <?php echo $row["date_reserver"] ?></small>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
            <h3 class="col-lg-12">Reservation Valider</h3>
            <hr class="col-lg-12">
            <?php
            foreach ($row2 as $row) {
                if ($row["archive"] == 0 && $row["valide"] == 1) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                        <div class="card w-65">
                            <img src="<?php echo $row["img"]; ?>" width="250px" height="250px" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Bien Info</h5>

                                <span class="badge rounded-pill bg-primary float-end">VALIDER</span>
                                <hr>
                                <p class="card-text"><b>Bien :</b> <?php echo $row["Nom_Type"] ?></p>
                                <p class="card-text"><b>Type de lit :</b> <?php echo $row["Type_Lit"] ?></p>
                                <p class="card-text"><b>Type vue :</b> <?php echo $row["Type_Vue"] ?></p>
                                <p class="card-text"><b>Type pension :</b> <?php echo $row["Type_Pension"] ?></p>
                                <p class="card-text"><b>Prix :</b> <?php echo $row["PRIX"] ?> DH</p>
                                <p class="card-text"><b>Nombre des Jours :</b> <?php echo $row["NB_Jour"] ?></p>
                                <hr>
                                <?php if (!empty($row["id_enfant"])) { ?>
                                    <h5 class="card-title">Enfant info</h5>
                                    <p class="card-text"><b>N°_ Bambin :</b> <?php echo $row["bambin"] ?><b> / Choix :</b> <?php echo $row["bambin_choix"] ?></p>
                                    <p class="card-text"><b>N°_ Enfant :</b> <?php echo $row["enfant"] ?> <b> / Choix :</b><?php echo $row["enfant_choix"] ?></p>
                                    <p class="card-text"><b>N°_ Adulte :</b> <?php echo $row["adulte"] ?><b> / Choix :</b> <?php echo $row["adulte_choix"] ?></p>
                                    <hr>
                                <?php } ?>
                                <a href="../controller/controller.php?deladm= <?php echo $row["id_bien"]; ?>" class="btn rounded-pill btn-danger float-end ms-2"><i class="fas fa-trash"></i></a>

                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Date reservation <?php echo $row["date_reserver"]; ?> </small>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } ?>
        </div>

    </div>

    <?php include '../includs/footer.php'; ?>
    <script src="../js/bootstrap.js"></script>
</body>

</html>