<?php
include 'functions.php';
include './db_functions_with_pdo.php';

$articles = getArticle(connectDB());

$titre = 'Mes super articles | Mon super blog';

include 'header.php';
?>



<h1>Mes super articles</h1>


<div class="list-group my-4">
    <?php
    foreach ($articles as $article) { ?>

        <article class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h2 class="mb-1"><?= $article['titre'] ?></h2>
                <small><?= $article['date'] ?></small>
            </div>
            <p class="mb-1"><?= accrocheArticle($article) ?></p>
            <!-- Les liens ont disparu, 
                aussi on crée un paramètre de requête que l'on appelle id 
                et on lui donne la valeur de l'id de l'article que l'on souhaite consulter -->
            <small class="text-muted"><a href="article.php?id=<?= $article['id'] ?>">Lire l'article.</a></small>
        </article>

    <?php }
    ?>
</div>

<?php include 'footer.php'; ?>