<?php

$gajiPokok = 1000000;
$golongan = 2;
$tunjangan = null;

if ($golongan == 1)
{
    $tunjangan = 35/100 * $gajiPokok;
} else if ($golongan == 2)
{
    $tunjangan = 25/100 * $gajiPokok;
} else
{
    $tunjangan = 15/100 * $gajiPokok;
}

$pajak = 0;

if($gajiPokok >= 1000000)
{
    $pajak = 5/100 * $gajiPokok;
}

$gajiBersih = (double)($gajiPokok + $tunjangan - $pajak);

echo "Masukkan besar gaji pokok : $gajiPokok <br>" .
    "Masukkan golongan : $golongan <br>" .
    "Pajak : $pajak <br>" .
    "Gaji Bersih : " . number_format($gajiBersih, 2)  . "<br>";

printf("tunjangan : %1\$.1f <br>", $tunjangan) ;

echo "jancok";

