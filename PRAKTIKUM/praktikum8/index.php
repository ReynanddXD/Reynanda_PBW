<?php
// PROSES GET
if (isset($_GET['nama']) && isset($_GET['email'])) {
    $get_nama = htmlspecialchars($_GET['nama']);
    $get_email = htmlspecialchars($_GET['email']);
    echo "<h3>Data GET</h3>";
    echo "Nama (GET): $get_nama <br>";
    echo "Email (GET): $get_email <br><br>";
}

// PROSES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_nama = htmlspecialchars($_POST['nama']);
    $post_nilai = $_POST['nilai'];

    echo "<h3>Data POST</h3>";
    if (!empty($post_nama)) {
        echo "Nama: $post_nama <br>";
    } else {
        echo "Nama tidak boleh kosong! <br>";
    }

    // Cek nilai dan berikan grade
    if ($post_nilai >= 80) {
        echo "Nilai: $post_nilai (A)<br>";
    } elseif ($post_nilai >= 70) {
        echo "Nilai: $post_nilai (B)<br>";
    } else {
        echo "Nilai: $post_nilai (C)<br>";
    }

    // Contoh logika lain: cek umur dan KTP
    $umur = 20;
    $ktp = true;
    if ($umur >= 17 && $ktp) {
        echo "Status: Boleh memilih <br>";
    }
}
?>

<!-- Form POST -->
<h2>Form POST</h2>
<form method="post" action="">
    Nama: <input type="text" name="nama"><br>
    Nilai: <input type="number" name="nilai"><br>
    <input type="submit" value="Proses POST">
</form>

<!-- Link untuk GET -->
<h2>Link GET</h2>
<a href="?nama=Andre&email=gmail@gmail.com">Klik untuk kirim data GET</a>