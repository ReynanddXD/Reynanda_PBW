<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Angka Genap</title>
</head>
<body>

<?php
$awal = 2;
$akhir = 10;

for ($i = $awal; $i <= $akhir; $i++) {
    if ($i % 2 == 1) {
        continue;
    }
    echo "Angka ke-" . $i . "<br>";
}
?>

</body>
</html>
