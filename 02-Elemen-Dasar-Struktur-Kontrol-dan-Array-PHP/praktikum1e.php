<?php

$bilanganMaksimum = 5;
$hasil = 0;

for ($i = 1; $i <= $bilanganMaksimum; $i++)
{
    $hasil += $i;
}

echo  "Masukkan nilai maksimum : $bilanganMaksimum <br>";
echo  "Total nilai adalah : $hasil";

