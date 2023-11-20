<?php

function getTanamanRekomendasi($jenisTanah, $kota, $provinsi, $longitude, $latitude) {
    // Ganti dengan kunci API OpenAI yang valid
    $apiKey = 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;

    // Data yang akan dikirimkan ke OpenAI API
    $data = array(
        'jenis_tanah' => $jenisTanah,
        'kota' => $kota,
        'provinsi' => $provinsi,
        'longitude' => $longitude,
        'latitude' => $latitude
    );

    // Konversi data ke format JSON
    $jsonData = json_encode($data);

    // URL API OpenAI
    $apiUrl = 'https://api.openai.com/v1/your-endpoint';

    // Konfigurasi cURL
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ));

    // Eksekusi cURL dan dapatkan respons
    $response = curl_exec($ch);

    // Tangani kesalahan jika ada
    if (curl_errno($ch)) {
        return 'Error: ' . curl_error($ch);
    }

    // Tutup koneksi cURL
    curl_close($ch);

    // Proses respons (misalnya, hanya mengambil bagian tertentu dari respons)
    $parsedResponse = json_decode($response, true);
    $rekomendasi = isset($parsedResponse['recommendation']) ? $parsedResponse['recommendation'] : 'Tidak ada rekomendasi';

    return $rekomendasi;
}
?>
