<?php

$nama = 'Trisa';
$bb = 41; // Berat badan dalam kilogram (kg)
$tb = 150; // Tinggi badan dalam centimeter (cm)

$tb_m = $tb / 100; // Mengubah tinggi badan dari centimeter ke meter
$bmi = $bb / ($tb_m * $tb_m); // rumus menghitung nilai BMI

echo "Halo, $nama<br>";
echo "Nilai BMI anda adalah $bmi, ";

if ($bmi < 18.5) {
    echo "anda termasuk Kurus<br>";
} else if ($bmi >= 18.5 && $bmi < 25) {
    echo "anda termasuk Sedang/Normal<br>";
} else if ($bmi >= 25 && $bmi <= 27) {
    echo "anda termasuk Gemuk<br>";
} else {
    echo "anda termasuk Obesitas<br>";
}
