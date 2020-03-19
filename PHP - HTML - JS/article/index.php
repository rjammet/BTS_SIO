<h1 class="text-center">Mes derniers articles</h1>
<?php

$r = $db->prepare("SELECT * FROM news ORDER BY id ASC");
$r->execute();

while ($result = $r->fetch(PDO::FETCH_OBJ)): ?>


<?= $result->news_title; ?>
<?= $result->news_content; ?>
<?= $result->news_date; ?>


<a href="edition.php?id=<?= $result->id; ?>" class="text-muted text-black-50">Editer</a>
<a href="delete.php?id=<?= $result->id; ?>" class="text-muted text-black-50">Supression</a>

<?php endwhile; ?>
