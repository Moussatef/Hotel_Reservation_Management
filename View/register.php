<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/registre.css">
    <title>Document</title>
</head>
<?php include '../includs/headre.php'; ?>

<body>
    <div class="container " style="margin-top: 8%;">

        <div class="row  sing">
            <h1>Sign Up</h1>
            <h2>Hello! let's get started</h2>
            <h4>Sign up to continue.</h4>
            <form action="../controller/controller.php" method='POST'>
                <div class="mb-3 row">
                    <label for="Name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Name" id="nom" placeholder="Name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="First_Name" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_name" id="Prenom" placeholder="First Name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,3}$" name="email" id="staticEmail" placeholder="email@example.com">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" pattern="[a-z0-9._%+-@]{4,20}$" name="password" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <input type="submit" value="save" class="w-100 btn btn-primary btn-md">
            </form>
        </div>

    </div>
    </div>
    </div>
    <?php include '../includs/footer.php'; ?>
    <!-- <script>
        var nom = document.getElementById("nom");

        function verf_Nom() {
            if (nom.value.length > 3) {
                return true;
            } else {
                return false;
            }
        }
        var Pnom = document.getElementById("Prenom");

        function verf_Nom() {

            if (Pnom.value.length > 3) {
                return true;
            } else {
                return false;
            }
        }
    </script> -->
    <script src="../js/bootstrap.js"></script>
</body>

</html>