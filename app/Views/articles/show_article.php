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

<div class="container">
    <h1><?= !empty($article['title']) ? esc($article['title']) : "No Title" ?></h1>
    <p style="color:#999; font-size:13px;">Published at <?= esc($article['created_at']) ?></p>
    <div><?= esc($article['content']) ?></div>
</div>

<?= view('_partials/footer') ?>

</body>
</html>