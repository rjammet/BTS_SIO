<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/8f41d5a85e.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.css"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/headerAndFooter.css">

    <title>Connexion</title>

</head>
<body>
<?php include("../pages/header.php"); ?>

<h4>LOGIN</h4>
<form method="post">
    <input type="text" name="lpseudo" id="lpseudo" placeholder="Votre pseudo" required><br/>
    <input type="password" name="lpassword" id="lpassword" placeholder="Votre mot de passe" required><br/>
    <input type="submit" name="formlogin" id="formlogin" value="OK">
</form>

<?php include("../pages/footer.php"); ?>

<?php

include("../database/database.php");
global $db;


if (isset($_POST['formlogin'])) {
    extract($_POST);

    if (!(empty($lpseudo) && empty($lpassword))) {
        $q = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
        $q->execute(['pseudo' => $lpseudo]);
        $result = $q->fetch();

        if ($result == true) {
            if (password_verify($lpassword, $result['password'])) {

                echo "Connexion..";
                $_SESSION['pseudo'] = $result['pseudo'];
                $_SESSION['email'] = $result['email'];
            } else {
                echo "Movais mot de passe";
            }
        } else {
            echo "Le pseudo (" . $lpseudo . ") n'existe pas";
        }
    } else {
        echo 'Veuillez renseigner tout les champs';
    }
}
?>
</body>
</html>

