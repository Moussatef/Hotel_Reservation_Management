<?php

use authentication\authentication;
use bien\bien;
use client\client;
use personne\personne;

require '../includs/autoload.inc.php';


$client = new client;
$bien = new bien;
$personne = new personne;
$auto = new authentication;

if (isset($_POST["Name"])) {
    $name = $_POST["Name"];
    $f_name  = $_POST["f_name"];
    $email  = $_POST["email"];
    $password  = $_POST["password"];


    $client->insert_personne($name, $f_name, $email, $password);
    header('Location: ../View/login.php');
}

if (isset($_POST["email_auto"])) {
    $email = $_POST["email_auto"];
    $password = $_POST["pass_auto"];
    $admin  =  $auto->chick_user($email, $password, "admin");
    $client =  $auto->chick_user($email, $password, "client");
    echo "chalala" . $client;
    if ($admin[0] == 1) {
        $_SESSION['ID_PAdmin'] = $admin[1];
        $_SESSION["Profil"] = "profil_admin.php";
        $_SESSION['LogOut'] = 'profil_admin.php?logout=1';
        header('Location:../View/profil_admin.php');
    } elseif ($client[0] == 2) {
        $_SESSION["Profil"] = "profil_client.php";
        $_SESSION['LogOut'] = 'profil_client.php?logout=1';
        $_SESSION['ID_PClient'] = $client[1];
        header('Location:../View/profil_client.php');
    }
}

if (isset($_GET["del"])) {

    $id_bien = $_GET["del"];
    $bien->doDelete($id_bien);
    header('Location:../View/profil_client.php');
}
if (isset($_GET["deladm"])) {

    $id_bien = $_GET["deladm"];
    $bien->doDelete($id_bien);
    header('Location:../View/profil_admin.php');
}

if (isset($_GET["update"])) {
    $id_bien = $_GET["update"];
    $bien->update_bien($id_bien);
    header('Location:../View/profil_admin.php');
}

if (isset($_GET["valide"])) {
    $id_bien = $_GET["valide"];
    $bien->valider_bien($id_bien);
    header('Location:../View/profil_admin.php');
}
