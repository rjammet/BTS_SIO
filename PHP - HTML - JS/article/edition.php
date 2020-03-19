<?php
include("../database/database.php");
$rNews = $db->prepare("SELECT * FROM news WHERE id = ?");
$rNews->execute([$_GET['id']]);
$resultNews = $rNews->fetch(PDO::FETCH_OBJ);

if(!(is_numeric($_GET['id']))){
    die("Introuvable");
}

if (!empty($_POST)) {
    $errors = array();

    if (empty(trim($_POST['news_title']))) {
        $errors['title'] = "Le titre n'a pas été saisis !";
    }

    if (empty(trim($_POST['news_content']))) {
        $errors['content'] = "Le contenu n'a pas été saisis !";
    }

    if (empty($errors)) {
        $r = $db->prepare("UPDATE news SET news_title = ?, news_content = ?, news_style = ? WHERE id = ?");
        $r->execute([$_POST['news_title'], $_POST['news_content'], $_POST['news_style'], $_GET['id']]);
        echo "Envoyé avec succès";
    }
}


if ($rNews === false) {
    echo "L'article n'existe pas !";
}
?>