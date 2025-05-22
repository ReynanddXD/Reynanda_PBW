<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyatuan (Include dengan Navigasi)</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            padding: 10px 0;
            display: flex;
            justify-content: center;
        }

        .nav-container {
            width: 60%;
            display: flex;
            justify-content: space-between;
        }

        .nav-container a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            transition: 0.3s;
        }

        .nav-container a:hover {
            background-color: #555;
            border-radius: 5px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <a href="?page=soal1">Soal 1</a>
            <a href="?page=soal2">Soal 2</a>
            <a href="?page=soal3">Soal 3</a>
            <a href="?page=soal4">Soal 4</a>
        </div>
    </nav>

    <div class="content">
        <?php 
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if (in_array($page, ['soal1', 'soal2', 'soal3', 'soal4'])) {
                include "$page.php";
            } else {
                echo "<p>Halaman tidak ditemukan.</p>";
            }
        } else {
            echo "<p>Ini adalah navbar untuk memilih soal menggunakan include.</p>";
        }
        ?>
    </div>
</body>
</html>
