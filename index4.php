<?php

// $rain = 5;
// if ($rain) {
//     echo "Yongir";
//     if ($rain>3) {
//         echo "Livin";
//     }
// }else{
//     echo "Qor";
// }
// echo $rain ? "Yomgir" : "quyosh"

// $price = 90;

// if ($price >= 100) {
//     echo "Skidka 30%";
// }elseif ($price >=50){
//     echo "Skidka 15%";
// }else {
//     echo "skidka 10 %", "<br>";
// }
// $discount = $price >= 100 ? 30 : ($price >= 50 ? 15 : 10);
// echo $discount, "%<br>";

// $user = "dark";
// if(isset($user))
//     echo 'hello ', $user;
//     unset($user)

// $_SESSION['user'] = 'DARK';
// $user = $_SESSION['user'] ?? 0;
// if(empty($user)){
//     echo "GOST";
// }else echo "$user"

$lan = $_GET['lang'] ?? "ru";
switch ($lan){
    case 'en':
        echo 'Hello world';
        break;
    case 'ru':
        echo "Zdrastvuy";
        break;
    case 'uz':
        echo 'Assalomu Alaykum';
        break;
}

?>


<div>
    <a href="?lang=ru">ru</a>
    <a href="?lang=uz">uz</a>
    <a href="?lang=en">en</a>


</div>