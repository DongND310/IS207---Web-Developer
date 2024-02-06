<b>Thêm công dân</b>
<form action="themCD.php" method="post" style="width: 50%; border: 1px solid #000;">
    Mã công dân <input type="text" name="MaCD"><br>
    Tên công dân <input type="text" name="TenCD"><br>
    Giới tính 
    <input type="checkbox" name="GioiTinh"><br>
    Năm sinh <input type="date" name="NamSinh"><br>
    Nước về <input type="text" name="NuocVe"><br>
    Tên điểm cách ly
    <?php
        include "connect.php";
        $sql = "SELECT * FROM DIEMCACHLY";
        echo '<select name ="MaDCL" id="MaDCL">'; 
        $result = $connect->query($sql); 
        echo "<option>Chọn điểm cách ly</option>"; 
        while ($col = $result->fetch_row()){ 
        echo "<option value=".$col[0].">".$col[1]."</option>"; } 
        echo '</select>'; 
        ?><br>     
    <input type="submit" value="Thêm">
</form>