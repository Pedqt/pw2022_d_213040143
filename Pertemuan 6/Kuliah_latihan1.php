<?php
// Array Associative
// Array yang key nya ber-asosiasi / berpasangan dengan string

[
    "nama" => "Sandhika Galih",
    "npm" => "043040023",
    "email" => "sandhikagalih@unpas.ac.id",
    "jurusan" => "Teknik Informatika"
]

[
    "nama" => "Erik",
    "npm" => "023040123",
    "email" => "erik@gmail.com",
    "jurusan" => "Teknik Planologi"
]

[
    "nama" => "Doddy Ferdiansyah",
    "npm" => "033040001",
    "email" => "doddy@yahoo.com",
    "jurusan" => "Teknik Industri"
]

[

    "nama" => "Anggoro Ari",
    "npm" => "023040124",
    "email" => "Anggoro@gmail.com",
    "jurusan" => "Teknik Pangan "
]

// var_dump($mahasiswa[21])
?>

<?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs["nama"] ?></li>
        <li>NPM : <?php echo $mhs["npm"] ?></li>
        <li>Email : <?php echo $mhs["email"] ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
    </ul>
    <?php } ?>

