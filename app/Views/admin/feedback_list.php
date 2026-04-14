<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('admin/_partials/head') ?>
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1rem 1.25rem;
            margin-bottom: 1rem;
            background: white;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }

        .card-header-left {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card-header-left b {
            font-size: 14px;
            color: #333;
        }

        .card-header-left small {
            font-size: 12px;
            color: #999;
        }

        .card-header-right small {
            font-size: 12px;
            color: #999;
        }

        .card p {
            font-size: 13px;
            color: #555;
            margin-bottom: 12px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
<main class="main">

    <?= $this->include('admin/_partials/side_nav') ?>

    <div class="content">
        <h1>Feedback</h1>

        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <b>Dian</b>
                    <small>dian@beritakoding.com</small>
                </div>
                <div class="card-header-right">
                    <small>12 Desember 2024</small>
                </div>
            </div>
            <p>Kemampuan anda dalam memimpin tim ini mampu membawa saya dan rekan lainnya
                untuk mengerahkan semua kemampuan agar lebih baik lagi.</p>
            <a href="#" class="button button-danger button-small">Delete</a>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <b>Budi</b>
                    <small>budi@beritakoding.com</small>
                </div>
                <div class="card-header-right">
                    <small>15 Desember 2024</small>
                </div>
            </div>
            <p>Selama ini saya cukup senang bekerja sama dengan Anda karena memberi saya peluang
                untuk mencoba hal baru.</p>
            <a href="#" class="button button-danger button-small">Delete</a>
        </div>

        <?= $this->include('admin/_partials/footer') ?>
    </div>

</main>
</body>
</html>