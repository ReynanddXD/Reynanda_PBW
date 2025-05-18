<!DOCTYPE html>
<html>
<head>
    <title>Belajar Dasar PHP</title>
</head>
<body>
    <h2>1. Switch Statement</h2>
    <?php
    $hari = "Senin";

    switch ($hari) {
        case "Senin":
            echo "Hari pertama kerja!";
            break;
        case "jum'at":
            echo "Solat jumat!";
            break;
        case "Minggu":
            echo "Libur akhir pekan!";
            break;
        default:
            echo "Hari biasa.";
    }
    ?>

    <h2>2. Perulangan for (menampilkan angka 1-5)</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Angka ke-".$i."<br>";
    }
    ?>

    <h2>3. Perulangan for untuk array buah</h2>
    <?php
    $buah = ["Apel", "Jeruk", "Mangga"];
    for ($i = 0; $i < count($buah); $i++) {
        echo $buah[$i] . "<br>";
    }
    ?>

    <h2>4. Perulangan while (nilai 1-5)</h2>
    <?php
    $nilai = 1;
    while ($nilai <= 5) {
        echo "Nilai: ". $nilai ."<br>";
        $nilai++;
    }
    ?>

    <h2>5. Foreach untuk array asosiatif</h2>
    <?php
    $mahasiswa = [
        "10001" => "Andi",
        "10002" => "Budi",
        "10003" => "Citra"
    ];
    foreach ($mahasiswa as $nim => $nama) {
        echo "NIM: ". $nim .", Nama: ". $nama ."<br>";
    }
    ?>

    <h2>6. Operator Ternary</h2>
    <?php
    $umur = 18;
    $status = ($umur >= 17) ? "Dewasa" : "Anak-anak";
    echo "Status umur: " . $status;
    ?>
</body>
</html>
