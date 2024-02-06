<?php
    $MaDDL = $_POST['MaDDL'];
    $TenDDL = $_POST['TenDDL'];
    $MaTTP = $_POST['MaTTP'];
    $DacTrung = $_POST['DacTrung'];
    include "connect.php";
    $sql = "INSERT INTO DIEMDL VALUE('$MaDDL','$TenDDL','$MaTTP', '$DacTrung')";
    if ($connect->query($sql) === TRUE) {
        echo "Thêm thông tin điểm du lịch thành công"; }
    $connect->close();
?>