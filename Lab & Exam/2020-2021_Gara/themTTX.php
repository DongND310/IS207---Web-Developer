<?php
    $SOXE = $_POST['SOXE'];
    $HANGXE = $_POST['HANGXE'];
    $NAMSX = $_POST['NAMSX'];
    $MAKH = $_POST['MAKH'];
    include "connect.php";
    $sql = "INSERT INTO XE VALUE('$SOXE','$HANGXE','$NAMSX', '$MAKH')";
    if ($connect->query($sql) === TRUE) {
        echo "Thêm thông tin xe thành công"; }
    $connect->close();
?>