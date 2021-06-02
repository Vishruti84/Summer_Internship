<?php
    $con = mysqli_connect("localhost","root","","db_con");

    $id = $_GET['deleteid'];

    $sql = mysqli_query($con,"DELETE FROM `tbl_studnt` WHERE `ID`= '{$id}'");

    if($sql){
        echo "<script>alert('Record has been deleted');window.location='detail.php';</script>";
    }
?>