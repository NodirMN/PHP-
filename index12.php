<?php
////SQL Zapros

// define("SERVERNAME","localhost");
// define("DB_LOGIN","root");
// define("DB_PASSWORD","root");
// define("DB_NAME","new_db");

// $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
// $sql = "UPDATE `heroes` SET `age`=22 WHERE `name`='Joker'";

// if($connect->query($sql)===TRUE){
//     echo "record update";
// }else echo "error update";
// $connect->close();



define("SERVERNAME","localhost");
define("DB_LOGIN","root");
define("DB_PASSWORD","root");
define("DB_NAME","new_db");


$connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
$sql = "SELECT * FROM `heroes` ORDER BY `rank` DESC ";
$result=$connect->query($sql);
for($user=array();$row=$result->fetch_assoc();$user[]=$row);
print_r($user);
$connect->close();

if (isset($_POST['PUSH'])) {
    $name = $_POST['name'] ?? 0;
    $age = $_POST['age'] ?? 0;
    $rank = $_POST['rank'] ?? 0;
    $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $sql = "INSERT INTO `heroes`(`name`,`age`,`rank`) VALUE ('$name','$age','$rank')";
    $connect->query($sql);
    $connect->close();
}


foreach($user as $k=>$v){
    echo "<p>$v[id] | $v[name] | age: $v[age] | rank $v[rank]</p>";
}

?>

<form action="#" method="POST">
    <input type="text" name="name" placeholder="name">
    <input type="number" name="age" placeholder="age">
    <input type="num" name="rank" placeholder="rank">
    <input type="submit" value="add heroes" name="PUSH">
</form>