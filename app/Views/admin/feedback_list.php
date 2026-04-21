<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('admin/_partials/head') ?>
</head>

<body>
<main class="main">

    <?= view('admin/_partials/side_nav') ?>

    <div class="content">
        <h1>Feedback</h1>

        <?php foreach ($feedbacks as $feedback): ?>
            <div class="card">
                <div class="card-header">
                    <div>
                        <b><?= $feedback['name'] ?></b>
                        <small class="text-gray"><?= $feedback['email'] ?></small>
                    </div>
                    <div>
                        <small class="text-gray"><?= $feedback['created_at'] ?></small>
                    </div>
                </div>

                <p><?= $feedback['message'] ?></p>

                <a href="#"
                   data-delete-url="<?= site_url('admin/feedback/delete/'.$feedback['id']) ?>"
                   class="button button-danger button-small"
                   onclick="deleteConfirm(this)">
                   Delete
                </a>
            </div>
            <?= view('admin/_partials/footer') ?>
        <?php endforeach ?>
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