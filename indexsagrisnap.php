<?php
include 'config.php';
include 'rekomendasi.php';

// Ambil data dari database
$query = "SELECT jenis_tanah, kota, provinsi, longitude, latitude FROM jenis_tanah, data_mitra, locations";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $jenisTanah = $row['jenis_tanah'];
        $kota = $row['kota'];
        $provinsi = $row['provinsi'];
        $longitude = $row['longitude'];
        $latitude = $row['latitude'];

        // Dapatkan rekomendasi tanaman
        $rekomendasiTanaman = getTanamanRekomendasi($jenisTanah, $kota, $provinsi, $longitude, $latitude);

        // Tampilkan hasil rekomendasi
        echo "Rekomendasi tanaman untuk jenis tanah $jenisTanah di $kota, $provinsi: $rekomendasiTanaman<br>";
    }
} else {
    echo "Tidak ada data.";
}

$conn->close();
?>
