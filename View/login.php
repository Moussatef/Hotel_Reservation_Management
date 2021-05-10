<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/Style_Login.css">
    <title>Document</title>
</head>

<body>
    <?php include '../includs/headre.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="sing">
                <h1>Login</h1>
                <h2>Hello! let's get started</h2>
                <h4>Sign in to continue.</h4>
                <form action="../controller/controller.php" method='POST'>
                    <span style="color:red;"></span>
                    <br>
                    <input type="email" onkeyup="" name="email_auto" class="em" placeholder="Your email" ID="email">
                    <input type="password" name="pass_auto" class="em" placeholder="Your password" ID="password">

                    <Label ID="Err" runat="server"></Label>
                    <input type="submit" value="Login" class="btn btn-primary w-50 mb-5">
                    <br>
                    <h5>Don't have an account?<a href="register.php">Sign Up </a></h4>

                </form>
            </div>
        </div>
    </div>

    </div>
    <?php include '../includs/footer.php'; ?>
    <script src="../js/bootstrap.js"></script>
</body>

</html>