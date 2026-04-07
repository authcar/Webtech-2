<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Article</title>

    <?= view('_partials/head') ?>
</head>

<body>

<?= view('_partials/navbar') ?>

<article class="article">
    <h1 class="post-title">
        <?= !empty($article['title']) ? esc($article['title']) : "No Title" ?>
    </h1>
    <div class="post-meta">
        Published at <?= esc($article['created_at']) ?>
    </div>
    <div class="post-body">
        <?= esc($article['content']) ?>
    </div>
</article>

<?= view('_partials/footer') ?>

</body>
</html>