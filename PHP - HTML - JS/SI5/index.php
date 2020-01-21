<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI5 - WebSite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8f41d5a85e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/headerAndFooter.css">
</head>
<body>

<?php include("pages/header.php"); ?>
<!-- col-xs-12 col-sm-6 col-md-3 -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="feature">
                <h2>Web Hosting <i class="fas fa-desktop"></i></h2>
                <p>Hébergement d'un serveur <span style="font-weight:bold">WEB</span>.</p>
                <a href="pages/tutorials/webhosting.php" class="btn btn-outline-info btn-lg">EN SAVOIR PLUS</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="feature">
                <h2>Configuration <i class="fab fa-connectdevelop"></i></h2>
                <p>Configurations <span style="font-weight:bold">avancés</span> d'un serveur WEB.</p>
                <a href="pages/tutorials/webhosting.php" class="btn btn-outline-info btn-lg">EN SAVOIR PLUS</a>
            </div>
        </div>

        <?php
        include("database/database.php");
        global $db;
        ?>

        <h4>Profile</h4>
        <?php
        if (isset($_SESSION['pseudo']) && (isset($_SESSION['email']))) {
            ?>
            <p>Votre pseudo : <?= $_SESSION['pseudo']; ?></p>
            <p>Votre email : <?= $_SESSION['email']; ?></p>
            <?php
        } else {
            echo "Veuillez vous connecter à votre compte";
        }
        ?>
    </div>
</div>

<?php include("pages/footer.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.css"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.css"></script>
</body>
</html>