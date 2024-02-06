<?php
    $MaDCL = $_GET['MaDCL'];
    include "connect.php";
    $sql = "SELECT * FROM CONGDAN WHERE MaDCL = '$MaDCL'";
    $result = $connect->query($sql);
    echo "<option value=''> </option>";
    while($row = $result->fetch_row())
    {
        echo "<option value='$row[0]'>$row[1]</option>";
    }
    $connect->close();
?>