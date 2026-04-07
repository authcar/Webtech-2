<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
    </tr>

    <?php foreach ($mahasiswa as $m) : ?>
    <tr>
        <td><?= $m['nim']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td><?= $m['alamat']; ?></td>
        <td><?= $m['telepon']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>