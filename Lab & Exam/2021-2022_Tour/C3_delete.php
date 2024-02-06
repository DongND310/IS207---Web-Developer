<?php
    $MaDDL = $_GET['MaDDL'];
    include "connect.php";
    $sql = "DELETE FROM CHITIET WHERE MaDDL ='$MaDDL'";
    $connect->query($sql);
    $connect->close();
?>