<!-- Pertemuan Tadi -->
<!-- <?php
// Representasi Data Mahasiswa
$mahasiswa = [
    ["Juliofaridhfp", "213040143", "juliofaridh00@gmail.com", "Teknik Informatika"],
    ["Pedqt", "213040144", "pedqt@gmail.com", "Teknik Pangan"],
    ["Julio", "213040145", "juliof@gmail.com", "Teknik Mesin"]
];


?>

// Menampilkan matriks tetapi menggunakan html
<?php foreach ($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs[0] ?></li>
    <li>NPM : <?php echo $mhs[1] ?></li>
    <li>Email : <?php echo $mhs[2] ?></li>
    <li>Jurusan : <?php echo $mhs[3] ?></li>
</ul>
<?php } ?> -->


<!-- Dari Youtube -->
<?php
$mahasiswa = [
    ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
    ["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"],
    ["Erik", "023040123", "Teknik Planologi", "erik@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama :<?= $mhs[0]; ?></li>
    <li>Nrp :<?= $mhs[1]; ?></li>
    <li>Jurusan :<?= $mhs[2]; ?></li>
    <li>Email: <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>