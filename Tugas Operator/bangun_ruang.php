<?php

// Kubus
echo "Menghitung Volume Kubus<br>";

$sisi = 4;
$volume_kubus = $sisi * $sisi * $sisi;

echo "Volume Kubus = " . $volume_kubus;
echo "<br><hr>";

// Balok
echo "Menghitung Volume Balok<br>";

$panjang = 3;
$lebar = 2;
$tinggi = 4;
$volume_balok = $panjang * $lebar * $tinggi;

echo "Volume Balok = " . $volume_balok;
echo "<br><hr>";

// Tabung
echo "Menghitung Volume Tabung<br>";

$jari_jari = 7;
$tinggi_tabung = 14;
$volume_tabung = 22 / 7 * $jari_jari * $jari_jari * $tinggi_tabung;

echo "Volume Tabung = " . $volume_tabung;
