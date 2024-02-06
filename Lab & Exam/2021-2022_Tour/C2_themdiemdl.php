Thêm thông tin điểm du lịch
<form action="themDDL.php" method="post" style="width: 50%; border: 1px solid #000;">  
    Tên thành phố
    <?php
        include "connect.php";
        $sql = "SELECT * FROM TINHTP;";
        echo '<select name ="MaTTP" id="MaTTP">';
        $result = $connect->query($sql);
        echo "<option>Chọn thành phố</option>";
        while ($col = $result->fetch_row()){
            echo "<option value=".$col[0].">".$col[1]."</option>";
        }
        echo '</select>';
    ?><br>
    Mã điểm du lịch <input type="text" name="MaDDL" id="MaDDL"><br>
    Tên điểm du lịch <input type="text" name="TenDDL" id="TenDDL"><br>
    Đặc trưng <input type="text" name="DacTrung" id="DacTrung"><br>
    <input type="submit" name="submit" value="Thêm">
</form>