<html>
<head>
<title>Form Biodata Mahasiswa</title>
</head>

<body>

<h2>Form Biodata Mahasiswa</h2>

<form method="post" action="/beritakoding/public/kasus1/hasil">

<table>

<tr>
<td>Nomor Induk Mahasiswa</td>
<td><input type="text" name="nim"></td>
</tr>

<tr>
<td>Nama Mahasiswa</td>
<td><input type="text" name="nama"></td>
</tr>

<tr>
<td>Jurusan Mahasiswa</td>
<td><input type="text" name="jurusan"></td>
</tr>

<tr>
<td>Alamat Mahasiswa</td>
<td><input type="text" name="alamat"></td>
</tr>

<tr>
<td>Nomor Telpon Mahasiswa</td>
<td><input type="text" name="telpon"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Submit"></td>
</tr>

</table>

</form>

<?php if(isset($nim)) : ?>

<br><br>

<b>Nomor Induk Mahasiswa</b> = <?= $nim ?><br>
<b>Nama Mahasiswa</b> = <?= $nama ?><br>
<b>Jurusan Mahasiswa</b> = <?= $jurusan ?><br>
<b>Alamat Mahasiswa</b> = <?= $alamat ?><br>
<b>Nomor Telpon Mahasiswa</b> = <?= $telpon ?><br>

<?php endif; ?>

</body>
</html>