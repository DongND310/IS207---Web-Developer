<?php
    $MaCD = $_POST['MaCD'];
    $TenCD = $_POST['TenCD'];
    $GioiTinh = $_POST['GioiTinh'];   
    $NamSinh = $_POST['NamSinh'];
    $NuocVe = $_POST['NuocVe'];
    $MaDCL = $_POST['MaDCL'];
    include "connect.php";
    $sql = "INSERT INTO CONGDAN VALUE('$MaCD','$TenCD','$GioiTinh','$NamSinh','$NuocVe', '$MaDCL')";
    if ($connect->query($sql) === TRUE) {
        echo "Thêm thông tin công dân thành công"; }
    $connect->close();
?>