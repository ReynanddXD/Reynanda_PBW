<?php
include 'db.php'; // Pastikan file ini berisi koneksi $conn ke database
?>

<html>
<head>
    <title>Latihan Nilai</title>
</head>
<body>
    <h2>Form Input Buku</h2>
    <form method="post" action="">
        Judul: <input type="text" name="judul" required><br><br>
        Penulis: <input type="text" name="penulis" required><br><br>
        Tahun Terbit: <input type="number" name="tahun_terbit" required><br><br>
        Harga: <input type="number" name="harga" step="0.01" required><br><br>
        Stok: <input type="number" name="stok" required><br><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    // Mengecek apakah permintaan adalah POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil data dari form
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun_terbit = (int)$_POST['tahun_terbit'];
        $harga = (float)$_POST['harga'];
        $stok = (int)$_POST['stok'];

        // Gunakan prepared statement
        $stmt = $conn->prepare("INSERT INTO Buku (Judul, Penulis, Tahun_Terbit, Harga, stok) VALUES (?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssidi", $judul, $penulis, $tahun_terbit, $harga, $stok);
            if ($stmt->execute()) {
                echo "<p style='color: green;'>Buku berhasil ditambahkan!</p>";
            } else {
                echo "<p style='color: red;'>Gagal menambahkan buku: " . $stmt->error . "</p>";
            }
            $stmt->close();
        } else {
            echo "<p style='color: red;'>Kesalahan dalam prepare statement: " . $conn->error . "</p>";
        }
    }

    // Query SELECT untuk mengambil semua data dari tabel buku
    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql); // Menggunakan metode OOP

    // Cek apakah query berhasil dijalankan
    if (!$result) {
        die("Query gagal: " . $conn->error); // Properti error OOP
    }

    // Inisialisasi array untuk menyimpan data
    $data = [];

    // Fetch data baris demi baris ke dalam array asosiatif
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Menampilkan hasil data menggunakan foreach
    foreach ($data as $row) {
        echo "ID: " . $row['ID'] . "<br>";
        echo "Judul: " . htmlspecialchars($row['Judul']) . "<br>";
        echo "Penulis: " . htmlspecialchars($row['Penulis']) . "<br>";
        echo "Tahun Terbit: " . $row['Tahun_Terbit'] . "<br>";
        echo "Harga: Rp" . number_format($row['Harga'], 2) . "<br><hr>";
    }

    // Tutup koneksi setelah selesai
    $conn->close();
    ?>
</body>
</html>