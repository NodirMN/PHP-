<?php

// function foo_soom(int $a=10,int $b=10):int{
//     return $a+$b;
// }
// echo foo_soom(12,12);

// function foo_change(&$x){
//     $x .= " So'm";
//     return $x;
// }

// $x = 500;
// $y =2000;
// echo foo_change($x) ."<br>";
// echo foo_change($y) ."<br>";
// echo $x."<br>";
// echo $y."<br>";


// define("LOGIN",'admin');

// function show_login(){
//         return LOGIN;
// };
// echo show_login();

require_once ('func.php');

    counr_app();
    counr_app();
    counr_app();
    counr_app();
    counr_app();


    //////////ananimniy funksiya
    $arr = [10,20,30,40,50,88, 77,];
    $av = function(array $arr){
        return array_sum($arr)/count($arr);
    };

    echo "ortacha qiymat:". $av($arr);