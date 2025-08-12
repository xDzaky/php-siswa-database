<?php
// Koneksi ke database
$host = "localhost";
$user = "dzaky";
$pass = "gggaming21";   
$db   = "dbsiswa";

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama           = mysqli_real_escape_string($conn, $_POST['nama']);
    $kelas          = mysqli_real_escape_string($conn, $_POST['kelas']);
    $gender         = mysqli_real_escape_string($conn, $_POST['gender']);
    $umur           = intval($_POST['umur']);
    $alamat         = mysqli_real_escape_string($conn, $_POST['alamat']);
    $no_hp          = mysqli_real_escape_string($conn, $_POST['no_hp']);
    $email          = mysqli_real_escape_string($conn, $_POST['email']);
    $tanggal_lahir  = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
    $hobi           = mysqli_real_escape_string($conn, $_POST['hobi']);

    $sql = "INSERT INTO siswa (nama, kelas, gender, umur, alamat, no_hp, email, tanggal_lahir, hobi)
            VALUES ('$nama', '$kelas', '$gender', $umur, '$alamat', '$no_hp', '$email', '$tanggal_lahir', '$hobi')";

    if (mysqli_query($conn, $sql)) {
        echo "<p style='color: green;'>Data berhasil disimpan!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Siswa</title>
</head>
<body>
    <h2>Form Input Data Siswa</h2>
    <form method="post" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br><br>

        <label>Gender:</label><br>
        <select name="gender" required>
            <option value="Laki - Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" required><br><br>

        <label>Hobi:</label><br>
        <input type="text" name="hobi" required><br><br>

        <input type="submit" value="Simpan">
    </form>

    <h2>Data Siswa</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Gender</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Hobi</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['kelas']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['umur']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['no_hp']}</td>
                <td>{$row['email']}</td>
                <td>{$row['tanggal_lahir']}</td>
                <td>{$row['hobi']}</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
