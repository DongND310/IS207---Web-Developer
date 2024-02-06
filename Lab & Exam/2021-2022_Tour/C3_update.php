<form action="updateDDL.php" method="POST" style="width: 50%; border: 1px solid #000;">
    <?php
        $MaDDL = $_GET['MaDDL'];
        include "connect.php";
        $sql =  "SELECT D.MaDDL, TenDDL, DacTrung, T.TenTTP 
                    FROM DIEMDL D, TINHTP T WHERE D.MaTTP = T.MaTTP AND D.MaDDL = '$MaDDL'";
        if ($connect->query($sql) == true) {
            $rows = $connect->query($sql);
            $row = $rows->fetch_row();
            echo "<table>";
            echo "<tr>"."<td>Mã điểm du lịch</td>"."<td><input type='text' name='MaDDL' value='$row[0]' /></td>"."</tr>";
            echo "<tr>"."<td>Tên điểm du lịch</td>"."<td><input type='text' name='TenDDL' value='$row[1]'/></td>"."</tr>";
            echo "<tr>"."<td>Tên thành phố</td>";
            echo "<td>";
                $sql = "SELECT * FROM TINHTP;";
                echo '<select name ="MaTTP" id="MaTTP">';
                $result = $connect->query($sql);
                echo "<option>".$row[3]."</option>";
                while ($col = $result->fetch_row()){
                    echo "<option value=".$col[0].">".$col[1]."</option>";
                }
            echo "</select></td></tr>";
            
            echo "<tr>"."<td>Đặc trưng</td>"."<td><input type='text' name='DacTrung' value='$row[2]'/></td>"."</tr>";
            echo "</td></tr>";
            echo "</table>";
        } else {
            echo "Error deleting record: " . $connect->error;
        }
        $connect->close();
    ?>
        <input type="submit" value="update">
</form>


