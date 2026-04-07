<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Artikel</title>

    <?= view('_partials/head') ?>
</head>
<body>

<?= view('_partials/navbar') ?>

<div class="container">
    <h1>List Artikel</h1>
    <ul>

    <?php foreach ($articles as $article): ?>
        <li>
            <a href="<?= site_url('article/' . $article['slug']) ?>">
                <?= !empty($article['title']) ? esc($article['title']) : "No Title" ?>
            </a>
        </li>
    <?php endforeach; ?>

    </ul>
</div>

<?= view('_partials/footer') ?>

</body>
</html>