<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan</title>
</head>
<body>

<form method="post">
    Masukkan jumlah roda: <input type="number" name="roda">
    <input type="submit" value="Cek Kendaraan">
</form>

<?php
if (isset($_POST['roda'])) {
    $roda = $_POST['roda'];

    switch ($roda) {
        case 2:
            echo "Sepeda/Motor";
            break;
        case 3:
            echo "Bajaj";
            break;
        case 4:
            echo "Mobil";
            break;
        case 6:
            echo "Truk";
            break;
        default:
            echo "Tidak diketahui";
    }
}
?>

</body>
</html>
