<form action="c4_updateCD.php" method="POST" style="width: 50%; border: 1px solid #000;">
    <?php
        $MaCD = $_GET['MaCD'];
        include "connect.php";
        $sql =  "SELECT C.MaCD, TenCD, GioiTinh, NamSinh, NuocVe, D.TenDCL, D.MaDCL
                FROM CONGDAN C JOIN DIEMCACHLY D ON C.MaDCL = D.MaDCL AND C.MaCD = '$MaCD'";
        if ($connect->query($sql) == true) {
            $rows = $connect->query($sql);
            $row = $rows->fetch_row();
            echo "<table>";
            echo "<tr>"."<td>Mã công dân</td>"."<td><input type='text' name='MaCD' value='$row[0]' /></td>"."</tr>";
            echo "<tr>"."<td>Tên công dân</td>"."<td><input type='text' name='TenCD' value='$row[1]'/></td>"."</tr>";
            $checked = ($row[2] == 1) ? "checked" : "";
            echo "<tr>"."<td>Giới tính</td>"."<td><input type='checkbox' name='GioiTinh' value='$row[2]' $checked/></td>"."</tr>";
            echo "<td>Năm sinh</td>"."<td><input type='date' name='NamSinh' value='$row[3]'/></td>"."</tr>";
            echo "<tr>"."<td>Nước về</td>"."<td><input type='text' name='NuocVe' value='$row[4]'/></td>"."</tr>";            
            echo "<tr>"."<td>Tên điểm cách ly</td>";
            echo "<td>";
                $sql = "SELECT * FROM DIEMCACHLY;";
                echo '<select name ="MaDCL" id="MaDCL">'; 
                $result = $connect->query($sql); 
                echo "<option>".$row[5]."</option>";
                while ($col = $result->fetch_row()){
                    echo "<option value=".$col[0].">".$col[1]."</option>";
                }
            echo "</select></td></tr>";
            echo "</table>";
        } else {
            echo "Error deleting record: " . $connect->error;
        }
        $connect->close();
    ?>
    <input type="submit" value="update">
</form>