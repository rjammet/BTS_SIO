<?php
include("../database/database.php");

if(!empty($_POST)){
    $errors = array();

    if(empty(trim($_POST['news_title']))){
        $errors['title'] = "Le titre n'a pas été saisi !";
    }

    if(empty(trim($_POST['news_content']))){
        $errors['content'] = "Le contenu n'a pas été saisi !";
    }

    if(empty($errors)){
        $r = $db->prepare("INSERT INTO news SET news_title = ?, news_content = ?, news_style = ?, news_date = NOW();");
        $r->execute([$_POST['news_title'], $_POST['news_content'], $_POST['news_style']]);
        echo "Envoyé avec succès";
    }
}
?>