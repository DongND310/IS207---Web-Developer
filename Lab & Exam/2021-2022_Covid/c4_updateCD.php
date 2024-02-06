<?php
    $MaCD = $_POST['MaCD'];
    $TenCD = $_POST['TenCD'];
    if (isset($_POST['GioiTinh'])) {
        $GioiTinh = 1;
    } else {
        $GioiTinh = 0;
    }   
    $NamSinh = $_POST['NamSinh'];
    $NuocVe = $_POST['NuocVe'];
    $MaDCL = $_POST['MaDCL'];
    include "connect.php";
    $sql = "UPDATE CONGDAN SET TenCD = '$TenCD',  GioiTinh = '$GioiTinh',  NamSinh = '$NamSinh',  NuocVe = '$NuocVe',  MaDCL = '$MaDCL'
    WHERE MaCD = '$MaCD'";
    $connect->query($sql);
    if($connect->query($sql)===true){
        echo "Cập nhật thông tin công dân thành công.";        }
    $connect->close();
?>