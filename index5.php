<?php
    /////////sikil
//     for($k=1;$k<=5;$k++){
//     for ($i=1; $i <= 9; $i++) { 
//         // if($i==5)break;
//         echo $i, ' ';
//     }
//     echo "<br>";
// }

// $total = 0;
// for ($i=1; $i <=100 ; $i++): 
//     $total+=$i;
// endfor;
// echo $total;

// $i = 1;
// while ($i <= 9) {
//     echo $i." ";
//     if ($i==3)continue; {
//         $i++;
//     }
// }
// $k =1 ;
// while ($k <= 9) {
//     $i = 1;
//     while ($i <= 9) {
//     echo $i. ' ';
//     $i++;
//     }
//     $k++;
// }
///////////foreach
$week = [1=>'D','S','CH','P','J','SH','Y' ];
foreach ($week as $key=>$day ) {
    echo "$key: $day <br>";
}

$console= [
    0=>["name"=>"xbox", "price"=> 500],
    1=>["name"=>"ps5", "price"=> 700],
];

foreach ($console as $key => $value) {
    echo $value['name']  . "<br>";
};