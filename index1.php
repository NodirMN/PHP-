<?php
    define("DB_LOGIN", "root");
    echo DB_LOGIN . "<br>";
    // define('COLORS',['red','green','blue']);
    // echo COLORS[0] . "<br>";
    echo defined('COLORS') . "<br>";

    echo __DIR__, '<br>';
    echo __FILE__, '<br>';
    echo __LINE__, '<br>';
    echo PHP_VERSION ,'<br>';
    error_reporting(E_ALL);

    ////////////////////////////////
    $name = "Nodir";
    $age = 28;
    define('CITY', ['Toshkent', 'Andijon']);

    echo "Ism: ",$name ,"<br>", "Yosh: ", $age, "<br>";
    echo "Tug'ulgan joy: ", CITY[0] . "<br>";


    $text = "Ismim ". $name . " Yoshim ". $age . " da ". CITY[0] . "da ".  "Tugilganman";
    echo $text;

    define('COLORS', ['#DC143C', '#7FFF00'])


?>
<div>
    <span style="background-color:<?= COLORS[1] ?>;"> <?= $text ?></span>
</div>
