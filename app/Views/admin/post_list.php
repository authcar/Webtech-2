<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('admin/_partials/head') ?>
</head>

<body>
<main class="main">

    <?= $this->include('admin/_partials/side_nav') ?>

    <div class="content">
        <h1>List Artikel</h1>

        <div class="toolbar">
            <a href="#" class="button button-primary" role="button">+ Tulis Artikel</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th style="width: 15%;" class="text-center">Status</th>
                    <th style="width: 25%;" class="text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <div>Artikel Kedua</div>
                        <div class="text-gray">
                            <small>12 Desember 2024</small>
                        </div>
                    </td>
                    <td class="text-center text-gray">Draft</td>
                    <td>
                        <div class="action">
                            <a href="#" class="button button-small">View</a>
                            <a href="#" class="button button-small">Edit</a>
                            <a href="#" class="button button-small button-danger">Delete</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div>Artikel Pertama</div>
                        <div class="text-gray">
                            <small>9 Desember 2024</small>
                        </div>
                    </td>
                    <td class="text-center text-green">Published</td>
                    <td>
                        <div class="action">
                            <a href="#" class="button button-small">View</a>
                            <a href="#" class="button button-small">Edit</a>
                            <a href="#" class="button button-small button-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <?= $this->include('admin/_partials/footer') ?>

    </div>

</main>
</body>
</html>