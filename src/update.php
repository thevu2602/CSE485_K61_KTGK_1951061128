<?php
require('./db/config.php');


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $giotinh = $_POST['giotinh'];
    $tuoi = $_POST['tuoi'];
    $mau = $_POST['mau'];
    $date = $_POST['date'];
    $sdt = $_POST['sdt'];
            $add = "UPDATE blood_donor set bd_name = '$name' ,bd_sex = '$giotinh' ,db_age = ' $tuoi' ,bd_group= '$mau' ,bd_reg_date= '$date' ,bd_phno = '$sdt' where db_id = $id";
    mysqli_query($conn,$add);

}