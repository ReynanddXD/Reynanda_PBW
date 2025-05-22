<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyatuan (Include)</title> 
</head>
<body>

<form method="post">
    Masukkan angka: <input type="number" name="angka"><br>
    <input type="submit" value="Cek">
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = (int)$_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "Angka $angka adalah $hasil<br>";
}
?>
</body>
</html> 