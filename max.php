<?php
$array = [
    1, 23, 32, 5,10000, 321, 312, 2, 352, 13 ,153, 21,32 ,1
];
 
$max = null;
$position = null;
 
for ($i = 0; $i < count($array); $i++)
{
    if ($max == null){
        $max = $array[$i];
        $position = $i;
    }
    else {
        if ($array[$i] > $max){
            $max = $array[$i];
            $position = $i;
        }
    }
}
 
echo "Giá trị lớn nhất là $max, nằm tại vị trí $position";
?>