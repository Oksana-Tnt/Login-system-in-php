<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3>
            <?php
            output_username();
            ?>
        </h3>
        <?php
        if (!isset($_SESSION["user_id"])) { ?>
            <h3>Log In</h3>
            <form action="includes/login.inc.php" method="POST">

                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" name="username">
                <label for="pwd">Password</label>
                <input type="password" id="password" class="form-control" name="pwd">

                <button class="btn btn-primary mt-3">Accedi</button>
            </form>
        <?php } ?>


        <?php
        check_login_errors();
        ?>
        <h3>Sign Up</h3>

        <form action="includes/signup.inc.php" method="POST">
            <?php signup_inputs(); ?>

            <button class="btn btn-primary mt-3">Accedi</button>
        </form>
        <?php
        check_signup_errors();
        ?>

        <h3>Log Out</h3>
        <form action="includes/logout.inc.php" method="POST">
            <button class="btn btn-primary mt-3">Accedi</button>
        </form>
    </div>

</body>

</html>