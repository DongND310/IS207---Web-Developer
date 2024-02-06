<?php
    $NGAYTRA = date('Y-m-d');
    $THANHTIEN = $_POST['THANHTIEN'];
    $MABD = $_POST['MABD'];
    include "connect.php";
    $sql = "UPDATE BAODUONG SET NGAYTRA = '$NGAYTRA', THANHTIEN = '$THANHTIEN' 
    WHERE MABD = '$MABD'";
    $connect->query($sql);
    if($connect->query($sql)===true){
        echo "Cập nhật thông tin bảo dưỡng xe thành công."; }
    else {
        echo "Cập nhật thông tin bảo dưỡng xe không thành công." .$connect->error;        }
    $connect->close();
?>