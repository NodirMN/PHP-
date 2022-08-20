<style>
    input{margin-bottom: 20px}
</style>

<form action="#" method="POST">
    <input type="text" name="name" placeholder="Ismingiz"><br>
    <label for="">18 yoshdan katta</label>
    <input type="checkbox" name="age"><br>
    <input type="submit"name="submit" value="Enter">

</form>

<?php
//print_r($_POST);

    if (isset($_POST['submit'])){
        $name = trim($_POST['name']);
        if (!preg_match('&^[a-zA-za-яA-яёЁ]+$&u',$name)) {
            exit ('Ism notogri');
        }
        $age_check = $_POST['age'] ?? '0';
        if ($age_check == 'on'){
            echo "$name  krishga ruhsat";
        }else echo "$name siz 18ga kirmagansiz";

    }
?>