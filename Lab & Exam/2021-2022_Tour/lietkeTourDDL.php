<?php
    $SoDDL = $_GET['SoDDL'];
    include "connect.php";
    $sql = "SELECT T.TenTour, count(C.MaDDL) FROM TOUR T JOIN CHITIET C WHERE T.MaTour = C.MaTour
    GROUP BY T.TenTour HAVING COUNT(*) >= $SoDDL";
    $result = $connect->query($sql);
    echo "<br>Số điểm du lịch mà các tour đi qua
    <table border='1'>
    <tr>
        <th>STT</th>
        <th>Tên Tour</th>
        <th>Số điểm du lịch</th>
    <tr>";
    $index = 1; 
    while($row = $result->fetch_row()) {
        Echo "
        <tr>
            <td>$index</td>
            <td>$row[0]</td>
            <td>$row[1]</td>
        </tr>";
        $index += 1;  
    } Echo "</table>";
?>
