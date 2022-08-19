<?php

// $month= [1=>'Yanvar', 'Fevral', 'Mart', 'Aprel'];

// echo "<pre>";
// print_r($month);
// echo "<pre>";
// echo $month[1];

// unset($month[4]);
// print_r($month);

$num = [2,4,3,6,85,53,12,12,10,34];
sort($num);
$num2 = array_unique($num);
foreach($num as $v){
    echo $v, ' ';
}

echo "summa = " . array_sum($num). "<br>";
echo "prizvideniya = " . array_product($num). "<br>";
echo "kol element = " . count($num). "<br>";