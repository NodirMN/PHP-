<?php

///////////Straka
$name = "Nodir";
$name2 = "Marasulov";
$age = 28;
echo gettype($name2) . "<br>";
echo is_string($name) .  "<br>"; // 1 true

echo var_dump($name2). "<br>";
echo var_dump($name). "<br>";
if (is_string($name)) echo "$name - bu straka <br>";

///////////////////////integer

$num = 33;
echo PHP_INT_MAX, "<br>"; /// max znacheniya
$num1 = 0b1010;
$num2 = 012;
$num3 = 0xA;
echo $num3, "<br>";
echo gettype($num)  . "<br>";
is_int($num3);/// 1

$a = 3.5;
$b = 5E2;
$c = 5E-2;

echo "a = $a b= $b  c = $c". "<br>";

if(is_float($a)) echo "3.5 suzuvchan float". "<br>";


////////////////////////////

$rain = true;
$snow = false;

echo "rain  = $rain, snow = $snow false <br>";

is_bool($rain);
echo gettype($rain), "<br>";
echo var_dump($snow) . "<br>";

$var = null;

echo $var;
echo var_dump($var)  . "<br>";

/////////////////////Massiv ARRAY

$arr_number = [1,2,3,4,5,6,7,8,9];

echo $arr_number[1]  . "<br>";
$arr_user = ['name' => 'Nodir', 'age' => 28];
echo $arr_user ['name'] . "<br>";
is_array($arr_user) . "<br>";
echo "<pre>";
print_r($arr_user) . "<br>" ;
echo "</pre>";

//////////////////////////////// Resurs
$book = fopen('dir/text.txt', 'red');
echo is_resource($book), "<br>";

//////////////////////////Obyekt
    // $mysql = new Mysqli('locolhost', 'root', 'root', 'darkpoger');
    // echo gettype($mysql);
    // var_dump($mysql);

    ///////////////////////////////

    $t = 5;
    $f = $t*1.5;
    echo gettype($f) 
?>