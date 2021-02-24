<?php

$arrayVal = array(7,2,3,8,1,4);
$temp = null;

//foreach ($arrayVal as $arrayv)
//{
//    echo "{$arrayv},";
//}

echo 'Terdapat nilai array : ' . implode(',', $arrayVal) . '<br>';

for($i = 0; $i < count($arrayVal); $i++)
{
    for($j = $i + 1; $j < count($arrayVal); $j++)
    {
        if($arrayVal[$j] < $arrayVal[$i])
        {
            $temp = $arrayVal[$i];
            $arrayVal[$i] = $arrayVal[$j];
            $arrayVal[$j] = $temp;
        }
    }
}

//foreach ($arrayVal as $arrayv)
//{
//    echo "{$arrayv},";
//}

echo 'Data yang terurut : ' . implode(',', $arrayVal);

