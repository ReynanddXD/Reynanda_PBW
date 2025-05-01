<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian (Dengan Array)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Input Pembelian Barang</h2>
    <form method="post">
        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" required>

        <label>Harga Satuan (Rp):</label>
        <input type="number" name="harga_satuan" required>

        <label>Jumlah Beli:</label>
        <input type="number" name="jumlah_beli" required>

        <input type="submit" value="Hitung Total">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        define("PAJAK", 0.10);

        $barang = [
            "nama" => $_POST["nama_barang"],
            "harga" => (int)$_POST["harga_satuan"]
        ];
        $jumlahBeli = (int)$_POST["jumlah_beli"];

        $totalSebelumPajak = $barang['harga'] * $jumlahBeli;
        $nilaiPajak = $totalSebelumPajak * PAJAK;
        $totalBayar = $totalSebelumPajak + $nilaiPajak;

        echo "<fieldset>";
        echo "<div class='hasil'>";
        echo "<h3>Perhitungan Total Pembelian (Dengan Array)</h3>";
        echo "<hr>";
        echo "<p>Nama Barang: " . htmlspecialchars($barang['nama']) . "</p>";
        echo "<p>Harga Satuan: Rp " . number_format($barang['harga'], 0, ',', '.') . "</p>";
        echo "<p>Jumlah Beli: " . $jumlahBeli . "</p>";
        echo "<p>Total Harga (Sebelum Pajak): Rp " . number_format($totalSebelumPajak, 0, ',', '.') . "</p>";
        echo "<p>Pajak (10%): Rp " . number_format($nilaiPajak, 0, ',', '.') . "</p>";
        echo "<p><strong>Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</strong></p>";
        echo "</div>";
        echo "</fieldset>";
    }
    ?>
</div>

</body>
</html>