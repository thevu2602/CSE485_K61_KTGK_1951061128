<?php
require('./db/config.php');

if(isset($_POST['add'])) {
    $name = $_POST['name'];
    $giotinh = $_POST['giotinh'];
    $tuoi = $_POST['tuoi'];
    $mau = $_POST['mau'];
    $date = $_POST['date'];
    $sdt = $_POST['sdt'];

    $add = "INSERT into blood_donor(bd_name ,bd_sex ,db_age ,bd_group,bd_reg_date,bd_phno)
            value('$name' ,'$giotinh' ,'$tuoi' ,'$mau' ,'$date' ,'$sdt')";
    mysqli_query($conn,$add);
}



// Toàn văn
// db_id
// bd_name
// bd_sex
// db_age
// bd_group
// bd_reg_date
// bd_phno