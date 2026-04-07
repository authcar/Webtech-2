<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<?= view('_partials/head') ?>
</head>


<body>
<?= view('_partials/navbar') ?> 

<h1>Contact Us</h1>
<p>Hubungi kami melalui form berikut</p>

<form action="http://localhost/beritakoding/public/Page/contact" method="post">
    <?= csrf_field() ?>

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="your name" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="your email address" required>
    </div>

    <div>
        <label for="message">Message</label><br>
        <textarea name="message" cols="30" rows="5" placeholder="write your message" required></textarea>
    </div>

    <div>
        <input type="submit" value="Kirim">
        <input type="reset" value="Reset">
    </div>
</form>

<?= view('_partials/footer') ?>

</body>
</html>