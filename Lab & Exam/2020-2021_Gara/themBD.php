<?php
    $SOXE = $_POST['SOXE'];
    $MABD = $_POST['MABD'];
    $SOKM = $_POST['SOKM'];
    $NOIDUNG = $_POST['NOIDUNG'];
    $NGAYNHAN = date('Y-m-d');
    include "connect.php";
    $sql = "INSERT INTO BAODUONG VALUES ('$MABD','$NGAYNHAN',NULL,'$SOKM','$NOIDUNG','$SOXE',NULL)";
    if($connect->query($sql)===true){
        echo "Thêm thông tin bảo dưỡng xe thành công.";
        }
    else {
        echo "Thêm thông tin bảo dưỡng xe không thành công." .$connect->error;
        }
    $connect->close();
?>