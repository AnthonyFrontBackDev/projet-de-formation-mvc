<?php
ob_start()
?>

<?php
while ($article = $affichage->fetch()) { ?>

    <article>
        <div class="bloc">
            <h2><?= $article['title'] ?></h2>
            <p><?= $article['article'] ?></p>
        </div>
    </article>

<?php } ?>
<?php
$nouvelAffichage = ob_get_clean();

?>