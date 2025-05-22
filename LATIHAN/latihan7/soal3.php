<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Hewan</title>
</head>
<body>

<form method="post">
    Masukkan nama-nama hewan (pisahkan dengan koma):<br>
    <input type="text" name="daftar_hewan"><br>
    <input type="submit" value="Tampilkan">
</form>

<?php
if (isset($_POST['daftar_hewan'])) {
    $input = $_POST['daftar_hewan'];
    $hewan = explode(",", $input);

    foreach ($hewan as $nama) {
        echo trim($nama) . "<br>";
    }
}
?>
</body>
</html>
