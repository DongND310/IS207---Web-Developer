<?php
    $MaCD = $_GET['MaCD'];
    include "connect.php";
    $sql1 = "DELETE FROM CD_TC WHERE MaCD ='$MaCD'";
    $connect->query($sql1);
    $sql2 = "DELETE FROM CONGDAN WHERE MaCD ='$MaCD'";
    $connect->query($sql2);
    $connect->close();
?>