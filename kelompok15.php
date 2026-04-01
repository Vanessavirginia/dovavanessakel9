<!DOCTYPE html>
<html>
<head>
    <title>Kelompok 15</title>
</head>
<body>

<h1>Hasil Percabangan PHP</h1>

<?php

// 1. Kondisi Positif
echo "<h2>1. Kondisi Positif</h2>";
$internet = true;
if ($internet) {
    echo "Siswa dapat membuka website sekolah dan mengerjakan tugas online.<br>";
}

// 2. Kondisi Negatif
echo "<h2>2. Kondisi Negatif</h2>";
$tugas_selesai = false;
if (!$tugas_selesai) {
    echo "Siswa harus menyelesaikan tugas sebelum melakukan kegiatan lain.<br>";
}

// 3. Dua Kondisi
echo "<h2>3. Dua Kondisi</h2>";
$pintu = "terbuka";
if ($pintu == "terbuka") {
    echo "Pintu harus ditutup agar rumah aman.<br>";
} else {
    echo "Rumah dalam keadaan aman.<br>";
}

// 4. Lebih dari 2 Kondisi
echo "<h2>4. Lebih dari 2 Kondisi</h2>";
$nilai = 85;

if ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai A (Sangat Baik)<br>";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "Nilai B (Baik)<br>";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "Nilai C (Cukup)<br>";
} elseif ($nilai >= 60 && $nilai <= 69) {
    echo "Nilai D (Perlu Meningkatkan Belajar)<br>";
} elseif ($nilai >= 0 && $nilai <= 59) {
    echo "Nilai E (Belum Lulus)<br>";
} else {
    echo "Nilai tidak valid<br>";
}

// 5. Percabangan Bersarang
echo "<h2>5. Percabangan Bersarang</h2>";
$kendaraan = "motor";
$bahan_bakar = "setengah";

if ($kendaraan == "motor") {
    if ($bahan_bakar == "hampir habis") {
        echo "Segera isi bensin di SPBU.<br>";
    } elseif ($bahan_bakar == "setengah") {
        echo "Motor bisa untuk perjalanan sedang.<br>";
    } elseif ($bahan_bakar == "penuh") {
        echo "Motor siap untuk perjalanan jauh.<br>";
    } else {
        echo "Kondisi bahan bakar tidak dikenali.<br>";
    }
} elseif ($kendaraan == "mobil") {
    if ($bahan_bakar == "hampir habis") {
        echo "Segera isi bensin mobil di SPBU.<br>";
    } elseif ($bahan_bakar == "setengah") {
        echo "Mobil bisa untuk perjalanan sedang.<br>";
    } elseif ($bahan_bakar == "penuh") {
        echo "Mobil siap untuk perjalanan jauh.<br>";
    } else {
        echo "Kondisi bahan bakar tidak dikenali.<br>";
    }
} else {
    echo "Jenis kendaraan tidak dikenali.<br>";
}

// 6. Kondisi AND
echo "<h2>6. Kondisi AND</h2>";
$cuaca = "hujan";
$aktivitas = "sekolah";

if ($cuaca == "hujan" && $aktivitas == "sekolah") {
    echo "Bawa payung atau jas hujan.<br>";
} elseif ($cuaca == "panas" && $aktivitas == "olahraga") {
    echo "Bawa air minum agar tidak dehidrasi.<br>";
} elseif ($cuaca == "dingin" && $aktivitas == "belajar luar") {
    echo "Pakai jaket agar tetap hangat.<br>";
} else {
    echo "Sesuaikan perlengkapan dengan kondisi.<br>";
}

// 7. Kondisi ATAU
echo "<h2>7. Kondisi ATAU</h2>";
$tempat = "perpustakaan";

if ($tempat == "perpustakaan" || $tempat == "kelas") {
    echo "Harus menjaga ketenangan.<br>";
} elseif ($tempat == "lapangan" || $tempat == "taman") {
    echo "Boleh bermain atau berolahraga.<br>";
} elseif ($tempat == "kantin" || $tempat == "tempat makan") {
    echo "Boleh berbicara sambil makan dengan sopan.<br>";
} else {
    echo "Tempat tidak dikenali.<br>";
}

?>

</body>
</html>