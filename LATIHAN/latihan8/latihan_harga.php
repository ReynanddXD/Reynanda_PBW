<html>
    <head>
        <title>Latihan 8</title>
        <link rel="stylesheet" href="style1.css">
    <head>
    <body>
        <form method="post" action="">
            <h2>Form Data Pembayaran UKT</h2>
            NPM: <input type="text" name="npm" required ><br>
            Nama: <input type="text" name="nama" required ><br>
            Prodi : <input type="text" name="prodi" required ><br>
            Semester: <input type="text" name="semester" required ><br>
            Biaya UKT: <input type="number" name="ukt" required ><br>
            <input type="submit" value="Proses">
        </form>

        <?php
            if (
                empty($_POST['npm']) &&
                empty($_POST['nama']) &&
                empty($_POST['prodi']) &&
                empty($_POST['semester']) &&
                empty($_POST['ukt'])
            ) {
                exit;
            }

            $npm = isset($_POST['npm']) ? $_POST['npm'] : '';
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            $prodi = isset($_POST['prodi']) ? $_POST['prodi'] : '';
            $semester = isset($_POST['semester']) ? (int)$_POST['semester'] : 0;
            $ukt = isset($_POST['ukt']) ? (float)$_POST['ukt'] : 0;

            $diskon = 0;
            $total_bayar = $ukt;

            if ($ukt >= 5000000 && $semester >= 8) {
                $diskon = 0.15 * $ukt;
                $total_bayar = $ukt - $diskon;
            } elseif ($ukt >= 5000000) {
                $diskon = 0.10 * $ukt;
                $total_bayar = $ukt - $diskon;
            }

            // Tampilkan hasil
            echo "<br>NPM: $npm<br>";
            echo "Nama: $nama<br>";
            echo "Prodi: $prodi<br>";
            echo "Semester: $semester<br>";
            echo "Biaya UKT: Rp. " . number_format($ukt, 2, ',', '.') . "<br>";
            echo "Diskon: Rp. " . number_format($diskon, 2, ',', '.') . "<br>";
            echo "Total Bayar: Rp. " . number_format($total_bayar, 2, ',', '.') . "<br>";
        ?>

    </body>
</html>