<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP Dasar</title>
</head>
<body>

<?php
// =============================================
// Menampilkan Teks Dasar di PHP
// =============================================
echo "<h2>Halo, selamat datang di dunia PHP!</h2>";
echo "<hr>";

// =============================================
// Variabel dalam PHP
// =============================================

$nama = "Reynanda";        // Tipe data: string
$umur = 20;            // Tipe data: integer

// Menampilkan variabel
echo "<h3>Contoh Variabel</h3>";
echo "Nama: " . $nama . "<br>";        // Menggabungkan string dan variabel
echo "Umur: " . $umur . " tahun<br><hr>";


// =============================================
// Konstanta dalam PHP
// =============================================

define("SITE_NAME", "unsika.ac.id");     // Membuat konstanta
define("VERSION", "1.0");

echo "<h3>Contoh Konstanta</h3>";
echo "Selamat datang di " . SITE_NAME . "<br>";
echo "Versi Sistem: " . VERSION . "<br><hr>";


// =============================================
// Tipe Data di PHP
// =============================================

echo "<h3>Contoh Tipe Data</h3>";

// String
$nama = "Reynanda";
echo "Nama saya adalah " . $nama . "<br>";

// Integer
$umur = 20;
echo "Umur saya " . $umur . " tahun<br>";

// Float
$berat = 70.5;
echo "Berat badan saya " . $berat . " kg<br>";

// Boolean
$isLogin = true;
echo "Status Login: " . ($isLogin ? "Aktif" : "Tidak Aktif") . "<br>";

// Array
$buah = ["apel", "jeruk", "mangga"];
echo "Buah favorit: " . $buah[1] . "<br>"; // Akan menampilkan 'jeruk'

// Object (OOP sederhana)
class Mahasiswa {
    public $nama;

    public function sapa() {
        return "Halo, saya $this->nama";
    }
}
$mhs = new Mahasiswa();
$mhs->nama = "Jeni";
echo $mhs->sapa() . "<br>";

// NULL
$data = null;
echo "Nilai data: ";
var_dump($data);  // var_dump menampilkan tipe dan nilai
echo "<hr>";


// =============================================
// Operator Aritmatika di PHP
// =============================================

echo "<h3>Contoh Operator Aritmatika</h3>";

$a = 10;
$b = 3;

echo "a = $a, b = $b <br>";
echo "Penjumlahan: " . ($a + $b) . "<br>";
echo "Pengurangan: " . ($a - $b) . "<br>";
echo "Perkalian: " . ($a * $b) . "<br>";
echo "Pembagian: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

// Increment dan Decrement
$a++;
$b--;

echo "Setelah Increment, a = $a <br>";
echo "Setelah Decrement, b = $b <br>";

?>

</body>
</html>
