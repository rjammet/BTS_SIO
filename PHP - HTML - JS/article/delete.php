<?php

include("../database/database.php");

$rNews = $db->prepare("SELECT * FROM news WHERE id = ?");
$rNews->execute([$_GET['id']]);
$resultNews = $rNews->fetch(PDO::FETCH_OBJ);

if(!is_numeric($_GET['id'])){
    die("Id non valide !");
}

if($resultNews === false){
    die("Cette news n\'existe pas, vous ne pouvez pas la supprimer.");
}else{
    $r = $db->prepare("DELETE FROM news WHERE id = ?");
    $r->execute([$_GET['id']]);
    header('Location: index.php');
}

