<?php

$bilanganMaksimum = 5;
$hasil = null;

for ($i = 1; $i <= $bilanganMaksimum; $i++)
{
    $hasil += $i;
}

echo  "Masukkan nilai maksimum : $bilanganMaksimum <br>";
echo  "Total nilai adalah : $hasil";

