<?php
include 'config.php';

if (isset($_POST['imageData'])) {
    $imageData = $_POST['imageData'];

    // Decode base64 data gambar
    $decodedImage = base64_decode(str_replace('data:image/png;base64,', '', $imageData));

    // Nama file gambar
    $imageName = "snapshot_" . time() . ".png";

    // Path untuk menyimpan gambar
    $imagePath = "uploads/" . $imageName;

    // Simpan gambar ke server
    file_put_contents($imagePath, $decodedImage);

    // Simpan informasi gambar ke database
    $sql = "INSERT INTO snapshots (image_path) VALUES ('$imagePath')";
    if ($conn->query($sql) === TRUE) {
        echo "Gambar berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Simpan koordinat ke database
    $sql = "INSERT INTO locations (latitude, longitude) VALUES ('$latitude', '$longitude')";
    if ($conn->query($sql) === TRUE) {
        echo "Lokasi berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
// Data dari formulir data_mitra
$judul = mysqli_real_escape_string($conn, $_POST['judul']);
$luas_lahan = mysqli_real_escape_string($conn, $_POST['luas_lahan']);
$jenis_tanah = mysqli_real_escape_string($conn, $_POST['jenis_tanah']); 
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$nomor_telepon = mysqli_real_escape_string($conn, $_POST['nomor_telepon']);
$kota = mysqli_real_escape_string($conn, $_POST['kota']);
$provinsi = mysqli_real_escape_string($conn, $_POST['provinsi']);

// Simpan data mitra ke database
$sql_mitra = "INSERT INTO data_mitra (judul, luas_lahan, jenis_tanah, nama, nomor_telepon, kota, provinsi) 
VALUES ('$judul', '$luas_lahan', '$jenis_tanah', '$nama', '$nomor_telepon', '$kota', '$provinsi')";

    if ($conn->query($sql_mitra) === TRUE) {
        // Data mitra berhasil disimpan
        echo "Data mitra berhasil disimpan.";
    } else {
        echo "Error: " . $sql_mitra . "<br>" . $conn->error;
    }

    // Redirect to index.php
    header("Location: kemitraan.php");
    exit(); // Make sure to exit after redirect
}

$conn->close();
?>
