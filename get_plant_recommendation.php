<?php

function get_plant_recommendation($latitude, $longitude) {
    $api_key = 'Nd6gASzCwZOWl8PW9DQRiouKIcItSe1540cT0AlKc80bqiuhQ5';  // Ganti dengan kunci API Plant.id Anda
    $plant_id_url = "https://plant.id/api/v3/identify?lat={$latitude}&lon={$longitude}&organs=leaf&api-key={$api_key}";

    try {
        $plant_data = file_get_contents($plant_id_url);
        $plant_info = json_decode($plant_data, true);

        if (isset($plant_info['suggestions'][0]['plant']['name'])) {
            $suggested_plant = $plant_info['suggestions'][0]['plant']['name'];
            return "Rekomendasi tanaman untuk lokasi ini: {$suggested_plant}";
        } else {
            return "Tidak ada rekomendasi tanaman untuk lokasi ini.";
        }
    } catch (Exception $e) {
        return "Error: {$e->getMessage()}";
    }
}

// Mendapatkan koordinat dari parameter GET
$latitude = $_GET['latitude'];
$longitude = $_GET['longitude'];

if ($latitude && $longitude) {
    $result = get_plant_recommendation($latitude, $longitude);
    echo $result;
} else {
    echo "Invalid coordinates.";
}
?>
