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

$gajiBersih = $gajiPokok + $tunjangan - $pajak;

echo "Masukkan besar gaji pokok : $gajiPokok <br>" .
    "Masukkan golongan : $golongan <br>" .
    "Besar Tunjangan : $tunjangan <br>" .
    "Pajak : $pajak <br>" .
    "Gaji Bersih : $gajiBersih <br>";


