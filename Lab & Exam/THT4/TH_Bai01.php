<?php
    include "connect.php";
    $sql = "select * from NHANVIEN";
    $result = $connect->query($sql);
    echo "<table border='1' cellspacing='0'>";
    echo "<tr><th>STT</th><th>Mã chi nhánh</th><th>Chức năng</th></tr>"; 
    if ($result->num_rows > 0) {
        while($row = $result->fetch_row()) {
            echo "<tr><td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td><a href='XoaNhanVien.php?manhanvien=$row[0]' class='Xoa'>Xóa 
                    <a href='SuaNhanVien.php?manhanvien=$row[0]' class='Sua'>Sửa</a>";

        } 
    } else {
        echo "Không có dòng nào";
    }
    $connect->close(); 
?>

