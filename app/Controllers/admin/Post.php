<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('admin/_partials/head') ?>
</head>

<body>
<main class="main">

    <?= view('admin/_partials/side_nav') ?>

    <div class="content">
        <h1>List Artikel</h1>

        <div class="toolbar">
            <a href="<?= site_url('admin/post/new') ?>" class="button button-primary">
                + Tulis Artikel
            </a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th class="text-center" style="width:15%;">Status</th>
                    <th class="text-center" style="width:25%;">Action</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td>
                        <div><?= $article['title'] ?></div>
                        <div class="text-gray">
                            <small><?= $article['created_at'] ?? '' ?></small>
                        </div>
                    </td>

                    <?php if ($article['draft'] === 'true'): ?>
                        <td class="text-center text-gray">Draft</td>
                    <?php else: ?>
                        <td class="text-center text-green">Published</td>
                    <?php endif; ?>

                    <td>
                        <div class="action">
                            <a href="<?= site_url('article/'.$article['slug']) ?>"
                               class="button button-small"
                               target="_blank">
                               Preview
                            </a>

                            <a href="<?= site_url('admin/post/edit/'.$article['id']) ?>"
                               class="button button-small">
                               Edit
                            </a>

                            <a href="#"
                               data-delete-url="<?= site_url('admin/post/delete/'.$article['id']) ?>"
                               class="button button-small button-danger"
                               onclick="deleteConfirm(this)">
                               Delete
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>

        <?= view('admin/_partials/footer') ?>
    </div>

</main>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function deleteConfirm(el){
    Swal.fire({
        title: 'Delete Confirmation!',
        text: 'Are you sure to delete the item?',
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'No',
        confirmButtonText: 'Yes Delete',
        confirmButtonColor: 'red'
    }).then(result => {
        if(result.isConfirmed){
            window.location.href = el.dataset.deleteUrl;
        }
    });
}
</script>

<?php if (session()->getFlashdata('message')): ?>
<script>
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true
});

Toast.fire({
    icon: 'success',
    title: '<?= session()->getFlashdata('message') ?>'
});
</script>
<?php endif; ?>

</body>
</html>