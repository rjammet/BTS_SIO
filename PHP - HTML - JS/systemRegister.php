<h4>REGISTER</h4>
<form method="post">
    <input type="email" name="email" id="email" placeholder="Votre email" required><br/>
    <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required><br/>
    <input type="password" name="password" id="password" placeholder="Votre mot de passe" required><br/>
    <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre mot de passe" required><br/>
    <input type="submit" name="formsend" id="formsend" value="OK">
</form>

<?php include("../pages/footer.php"); ?>

<?php

include("../database/database.php");
global $db;

if (isset($_POST['formsend'])) {
    extract($_POST);

    if (!(empty($password) && empty($cpassword) && empty($pseudo) && empty($email))) {
        if ($password == $cpassword) {
            $options = ['cost' => 12,];
            $hashpass = password_hash($cpassword, PASSWORD_BCRYPT, $options);

            $c = $db->prepare("SELECT email, pseudo FROM users WHERE email = :email AND pseudo = :pseudo");
            $c->execute(['email' => $email, 'pseudo' => $pseudo]);

            $result = $c->rowCount();
            if ($result == 0) {
                $q = $db->prepare("INSERT INTO users(email, pseudo, password) VALUES(:email, :pseudo, :password)");
                /*$token = generateToken(60);*/
                $q->execute(['email' => $email, 'pseudo' => $pseudo, 'password' => $hashpass]);
                $user_id = $db->lastInsertId();
                /*mail($_POST['email'], "Confimation de votre compte", "Afin de valider votre compte, cliquez sur ce lien :
                \n\n
                localhost/auth/confirm.php?id=".$user_id."&token=$token");
                header('location: login.php');*/
                echo "Compte créé";
            } else {
                echo "Un compte est déjà existant avec ses identifiants";
            }
        } else {
            echo "Les mots de passes de corresponds pas";
        }
    } else {
        echo "Les champs ne sont pas tous remplies";
    }
}
?>