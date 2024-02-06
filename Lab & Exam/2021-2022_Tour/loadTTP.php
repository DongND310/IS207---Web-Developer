<?php
    $SOXE = $_GET['SOXE'];
    include "connect.php";
    $sql = "SELECT TENTTP FROM TINHTP T JOIN DIEMDL D ON T.MATTP = D.MATTP WHERE T.TENTTP = '$TENTTP'";
    $result = $connect->query($sql);
    $row = $result->fetch_row();
    $connect->close();
    echo $row[0];
?>