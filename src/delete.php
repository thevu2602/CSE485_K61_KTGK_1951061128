<?php
require('./db/config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from blood_donor where db_id = $id";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}