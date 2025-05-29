<!DOCTYPE html>
<html>
<head>
    <title>Form Penilaian</title>
</head>
<body>

<form method="post" action="">
    Nama: <input type="text" name="nama" required ><br>
    Nilai: <input type="number" name="nilai" required ><br>
    <input type="submit" value="Proses">
</form>

<?php
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $nilai = isset($_POST['nilai']) ? $_POST['nilai'] : '';
    $predikat = "";
    $status = "";

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
        $status = "Lulus";
    } elseif ($nilai >= 75) {
        $predikat = "B";
        $status = "Lulus";
    } elseif ($nilai >= 65) {
        $predikat = "C";
        $status = "Lulus";
    } elseif ($nilai >= 50) {
        $predikat = "D";
        $status = "Tidak Lulus";
    } elseif ($nilai < 50) {
        $predikat = "E";
        $status = "Tidak Lulus";
    } else {
        $predikat = "Nilai tidak valid";
        $status = "-";
    }

    echo "<br>Nama: $nama<br>";
    echo "Nilai: $nilai<br>";
    echo "Predikat: $predikat<br>";
    echo "Status: $status<br>";
?>

</body>
</html>
