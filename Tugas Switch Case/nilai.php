<?php

$nilai = 85;

echo "Nilai anda adalah $nilai, kategori nilai anda adalah ";

switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        echo "A";
        break;
    case ($nilai >= 80 && $nilai < 90):
        echo "B";
        break;
    case ($nilai >= 70 && $nilai < 80):
        echo "C";
        break;
    default:
        echo "D";
        break;
}
