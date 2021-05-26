<?php
session_start();
require '../includs/autoload.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<script src="../js/ajax_script.js"></script>

<body>
    <?php include '../includs/headre.php'; ?>

    <div class="container-fluid">
        <main>

            <div class="py-5 text-center mt-5">

                <h2>Reservation form</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad fugiat nam et inventore nihil dolores facilis eius earum placeat. Quia sint suscipit praesentium magnam doloremque cumque laudantium reiciendis esse adipisci?
                </p>
            </div>
            <div id="succ">

            </div>

            <div class="row g-5">

                <div class="col-md-4 col-lg-3 order-md-last mb-5">

                    <h4 class="d-flex justify-content-between align-items-center mb-3 mt-3">
                        <span class="text-primary">Votre choix</span>
                        <span class="badge bg-primary rounded-pill">1</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Chambre Type</h6>
                                <small id="chamber_desc" class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">DH</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Vue</h6>
                                <small id="vue_desc" class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">DH</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Pension</h6>
                                <small id="pension_desc" class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">DH</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (MAD)</span>
                            <strong id="total_desc">DH</strong>
                        </li>
                    </ul>

                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card-group ">
                        <div class="card">
                            <img id="img_Bine" src="../img/h2.jpg" class="card-img-top" alt="..." width="150px" height="400px">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <h4 class="mb-3">Choisissez votre chambre pour réserver</h4>
                    <form class="needs-validation" id="form_res" action="controller_2" method="POST" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="bine" class="form-label">Bien</label>
                                <select class="form-select" name="bien" onchange="chick_bien()" value="" id="bien" required>
                                    <option value="0" selected hidden>Choose...</option>
                                    <option value="1">chambre double</option>
                                    <option value="2">chambre simple</option>
                                    <option value="3">Appartement</option>
                                    <option value="4">bungalow</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div id="Div_Lit" class="col-sm-6">
                            </div>
                            <div id="Div_Vue" class="col-12">
                            </div>
                            <div class="col-8">
                                <label for="pension" class="form-label">Pension</label>
                                <select class="form-select" disabled name="pension" onchange="chick_Pension()" id="pension" required>
                                    <option value="Null" selected hidden>Choose...</option>
                                    <option value="complete">complete</option>
                                    <option value="sans">sans</option>
                                    <option value="demi">demi</option>
                                </select>
                            </div>
                            <div class="col-4" id="Div_Pension">
                            </div>
                            <hr class="my-4">
                            <div class="my-3">
                                <div class="form-check">
                                    <input id="Sans_en" name="enfant" onchange="chick_enfant()" type="radio" class="form-check-input" checked required>
                                    <label class="form-check-label" for="credit">Sans Enfant</label>
                                </div>
                                <div class="form-check">
                                    <input id="Aavec_en" name="enfant" onchange="chick_enfant()" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="debit">Avec Enfant</label>
                                </div>
                            </div>
                            <div class="col-12" id="Div_Enfant">


                            </div>
                            <hr class="my-4">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="NB_Jour">Nombre jour(s) reserver</label>
                                    <input type="number" onchange="totalprix()" class="form-control " pattern="[1-9]{10}" value="1" min="1" name="NB_Jour" id="NB_Jour">
                                    <label class="input-group-text" for="NB_Jour">Jour</label>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="col-lg-2 col-sm-6">
                                <input type="text" readonly class="form-control-plaintext invisible" id="prix" value="0">
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <label id="lb_prix"></label>
                            </div>

                            <hr class="my-4">
                            <div class="col-12">
                                <input type="button" id="btn_res" onclick="checkout()" class="w-100 btn btn-primary btn-md mb-3" value="Continue to checkout">
                            </div>
                            <div id="checkout" class="row invisible">
                                <div class="col-6">
                                    <input type="button" id="btn_sub" class="w-100 btn btn-primary btn-md" value="New Reservation">
                                </div>
                                <div class="col-6">
                                    <input type="button" id="btn_plus" class="w-100 btn btn-primary btn-md" value="Submit & Add Reservation +">
                                </div>

                            </div>
                    </form>




                    <div class="col-4">

                    </div>
                </div>
            </div>
        </main>

        <?php include '../includs/footer.php'; ?>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/reservation.js"></script>
</body>

</html>