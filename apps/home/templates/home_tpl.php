<?php ob_start(); ?>

<h1>Le Blog de <span class="italic">Luc</h1>
<!-- <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></label> -->
<ul class="menu">
    <li><a href="/">Accueil</a></li>
    <li><a href="/aboutme">A propos de moi</a></li>
    <li><a href="/articles">Articles</a></li>
    <li><a href="/contact">Contact</a></li>
</ul>


<!-- //image à insérer -->

<h2> Mes derniers articles : </h2>
<?php
foreach ($posts as $post) {
    ?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($post->title); ?>
            <em>le
                <?= $post->frenchCreationDate; ?>
            </em>
        </h3>
        <p>
            <?= nl2br(htmlspecialchars($post->content)); ?>
            <br />
            <em><a href="index.php?action=post&id=<?= urlencode($post->identifier) ?>">Commentaires</a></em>
        </p>
    </div>
    <?php
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>