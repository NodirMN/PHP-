<?php   

// echo time() ."<br>";

// echo mktime(12,12,12,4,7,2022)."<br>";

// echo date('H:i:s d:m:y')."<br>";

// echo date('H:I:S d:m:y')."<br>";

// $data = new DateTime('2022');
// $date->modify('-1 day');
// echo $date->format('d.m.Y');


$start = microtime(true);
    for ($i=0; $i < 100000; $i++) { 
        $c *= $i;
    }
    $end = microtime(true);
    $sec = $end - $start;


    echo $sec;