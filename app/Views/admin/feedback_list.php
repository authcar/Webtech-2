<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('admin/_partials/head') ?>
</head>

<body>
<main class="main">

    <?= $this->include('admin/_partials/side_nav') ?>

    <div class="content">
        <h1>Feedback</h1>

        <div class="card">
            <div class="card-header">
                <div>
                    <b>Dian</b>
                    <small class="text-gray">dian@beritakoding.com</small>
                </div>
                <div>
                    <small class="text-gray">12 Desember 2024</small>
                </div>
            </div>

            <p>
                Kemampuan anda dalam memimpin tim ini mampu membawa saya dan rekan lainnya
                untuk mengerahkan semua kemampuan agar lebih baik lagi.
            </p>

            <a href="#" class="button button-danger button-small" role="button">Delete</a>
        </div>

       <div class="card">
    <div class="card-header">
        <div>
            <b>Dian</b>
            <small class="text-gray">dian@beritakoding.com</small>
        </div>
        <div>
            <small class="text-gray">12 Desember 2024</small>
        </div>
    </div>

    <p>
        Kemampuan anda dalam memimpin tim ini mampu membawa saya dan rekan lainnya
        untuk mengerahkan semua kemampuan agar lebih baik lagi.
    </p>

    <a href="#" class="button button-danger button-small" role="button">Delete</a>
</div>

<div class="card">
    <div class="card-header">
        <div>
            <b>Budi</b>
            <small class="text-gray">budi@beritakoding.com</small>
        </div>
        <div>
            <small class="text-gray">15 Desember 2024</small>
        </div>
    </div>

    <p>
        Selama ini saya cukup senang bekerja sama dengan Anda karena memberi saya peluang
        untuk mencoba hal baru.
    </p>

    <a href="#" class="button button-danger button-small" role="button">Delete</a>
</div>

<?= $this->include('admin/_partials/footer') ?>
</div>
</main>
</body>
</html>