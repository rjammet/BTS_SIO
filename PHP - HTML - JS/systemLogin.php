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
