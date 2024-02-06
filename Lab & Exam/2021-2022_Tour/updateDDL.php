<?php
    $MaDDL = $_POST['MaDDL'];
    $TenDDL = $_POST['TenDDL'];
    $MaTTP = $_POST['MaTTP'];
    $DacTrung = $_POST['DacTrung'];
    include "connect.php";
    $sql = "UPDATE DIEMDL SET MaDDL = '$MaDDL', TenDDL = '$TenDDL',  MaTTP = '$MaTTP',  DacTrung = '$DacTrung'
    WHERE MaDDL = '$MaDDL'";
    $connect->query($sql);
    if($connect->query($sql)===true){
        echo "Cập nhật thông tin điểm du lịch thành công."; }
    else {
        echo "Cập nhật thông tin điểm du lịch không thành công." .$connect->error;        }
    $connect->close();
?>