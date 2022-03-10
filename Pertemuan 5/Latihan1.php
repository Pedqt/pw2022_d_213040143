<!-- Pertemuan Tadi -->
<!-- <?php
// pertemuan 5 - Array
// Array adalah variabel yang dapat menyimpan banyak nilai sekaligus

$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";
// (tidak efektif)


//  Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"]; // (versi baru)
$bulan = array("Januari", "Februari", "Maret"); // (versi lama)

// mencetak array
// menggunakan index, (index dimulai dari 0)
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";

// menggunakan var_dump() atau print_r()
// hanya untuk debugging
var_dump($hari); // semua keliatan (char,variable)
echo "<br>";
print_r($bulan); // hanya variablenya saja yang keliatan
echo "<hr>";

// mencetak untuk user
// menggunakan looping

echo $hari[0]
echo $hari[1]
echo $hari[2]
// looping tidak efektif

for($i = 0; $i <5; $i++ ){
    echo $hari[$i1];
    echo "<br>";
}
// looping efektif 


for($i = 0; $i < count($hari); $i++ ){
    echo $hari[$i1];
    echo "<br>";
}
// looping dengan count (Penghitungan otomatis)
echo "<hr>";

// menggunakan foreach
// pengulangan khusus Array
foreach($bulan as $bln ){
    echo $bln;
    echo "<br>";
}
echo "<hr>";

// memanipulasi array
// menambah 1 elemen di akhir
$hari[] = "Jum'at";
$hari[] = "Sabtu";
print_r($hari);
echo "<br>";

$bulan[] = "April";
$bulan[] = "Mei";
print_r($bulan);
echo "<br>";
?> -->



<!-- Dari Youtube -->
<?php
// array
// variabel yang dapat memiliki banyak data
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
?>