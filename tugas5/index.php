<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori Film</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<main>
<body>
    <h1>Data Kategori Film</h1>

    <?php
    // Memasukkan file connection.php
    require_once 'connection.php';

    // Mengambil data kategori film dari database
    $sql = "SELECT * FROM kategori_film";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Menampilkan data dalam bentuk tabel
        echo "<table>";
        echo "<tr><th>ID</th><th>Kode Kategori</th><th>Nama Kategori</th><th>Keterangan</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Id_kategori_film"] . "</td>";
            echo "<td>" . $row["Kode_kategori_film"] . "</td>";
            echo "<td>" . $row["Nama_kategori_film"] . "</td>";
            echo "<td>" . $row["Keterangan"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Tidak ada data kategori film.";
    }

    // Menutup koneksi ke database
    $conn->close();
    ?>

</body>
</main>
</html>
