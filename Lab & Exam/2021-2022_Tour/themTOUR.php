<?php
    $MaTour = $_POST['MaTour'];
    $TenTour = $_POST['TenTour'];
    $NgayKhoiHanh = $_POST['NgayKhoiHanh'];
    $SoNgay = $_POST['SoNgay'];
    $SoDem = $_POST['SoDem'];
    $Gia = $_POST['Gia'];
    include "connect.php";
    $sql = "INSERT INTO TOUR VALUE('$MaTour','$TenTour','$NgayKhoiHanh', '$SoNgay', '$SoDem', '$Gia')";
    if ($connect->query($sql) === TRUE) {
        echo "Thêm thông tin tour thành công"; }
    $connect->close();
?>