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

$name=$age=$rank='';
$connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
$sql = "SELECT * FROM `heroes` ORDER BY `rank` DESC ";
$result=$connect->query($sql);
for($user=array();$row=$result->fetch_assoc();$user[]=$row);
// print_r($user);

$connect->close();
$last=count($user)-1;
$last_id = $user[$last]['id']+1;



if (isset($_POST['PUSH'])) {
    $name = $_POST['name'] ?? '0';
    $age = $_POST['age'] ?? '0';
    $rank = $_POST['rank'] ?? '0';
    $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $sql = "INSERT INTO `heroes` (`name`,`age`,`rank`) VALUE ('$name','$age','$rank')";
    $connect->query($sql);
    $connect->close();
    header("Location: http://localhost:3000/index12.php");
}

if (isset($_GET['CHANGE'])){
    $id=$_GET['CHANGE']?? '';
    $name=$user[$id]['name']??'';
    $age=$user[$id]['age']??'';
    $rank=$user[$id]['rank']??'';
    $id_base =$user[$id]['id']??'';
    echo "$name - $age";
    

}

if (isset($_POST['EDIT_HERO'])){
    $name = $_POST['name']??'0';
    $age = $_POST['age']??'0';
    $rank = $_POST['rank']??'0';
    $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $sql = "UPDATE `heroes` SET `name`='$name',`age`='$age', `rank`='$rank' WHERE `id`='$id_base'";
    $connect->query($sql);
    $connect->close();
    header("Location: http://localhost:3000/index12.php");
}

if (isset($_POST['DELETE_HERO'])) {
    $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $sql = "DELETE FROM `heroes` WHERE `id`='$id_base'";
    $connect->query($sql);
    $connect->close();
    header("Location: http://localhost:3000/index12.php");
}


foreach($user as $k=>$v){
    echo "<p>$v[id] | $v[name] | age: $v[age] | rank $v[rank] <a href='? CHANGE=$k'>Select</a> </p>";
}

?>


<form action="#" method="POST">
    <input type="text" name="name" placeholder="name" value="<?=$name?>">
    <input type="number" name="age" placeholder="age" value="<?=$age?>">
    <input type="num" name="rank" placeholder="rank"value="<?=$rank?>">
    <input type="submit" value="Add" name="PUSH">
    <?php if(isset($_GET['CHANGE'])):?>
    <input type="submit" value="Edit" name="EDIT_HERO">
    <input type="submit" value="Delete" name="DELETE_HERO">
    <?php endif ?>
</form>
