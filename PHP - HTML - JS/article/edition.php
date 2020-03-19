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

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../api/fontawesome/css/all.css" rel="stylesheet">
    <link href="../api/bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>TEST CONTAINER</title>
    <link href="" rel="stylesheet">
</head>
<body>

<h1 class="text-center">Mode édition <?= $_GET['id']; ?></h1>

<?php if($resultNews === false): ?>
    <div class="bd-callout bd-callout-danger">
        <h5 id="conveying-meaning-to-assistive-technologies">Problème ..</h5>
        <p><code class="highlighter-rouge">L'article est introuvable, </code>veuillez vérifier si il existe bien.<strong>ID: <?= $_GET['id']; ?></strong>
        </p>
    </div>

<?php else: ?>
    <form method="POST" action="" class="well">

        <div class="form-group">
            <label for="news_title"> Titre : </label>
            <label><input type="text" value="<?= $resultNews->news_title; ?>" name="news_title" class="form-control"
                          placeholder="Titre de l'article" required></label>
        </div>

        <div class="form-group">
            <label for="news_content"> Contenus : </label>
            <label><textarea name="news_content" rows="10" class="form-control" placeholder="Contenu de l'article"
                             required><?= $resultNews->news_content; ?></textarea></label>
        </div>

        <div class="form-group">
            <label for="news_style">Style de l'article :</label>
            <label>
                <select class="form-control" name="news_style">
                    <option value="<?= $resultNews->news_style; ?>">Style actuel (<?= $resultNews->news_style; ?>)</option>
                    <option value="success">Success</option>
                    <option value="danger">Danger</option>
                </select>
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Publier l'article</button>
    </form>
    
<?php endif; ?>

</body>
</html>