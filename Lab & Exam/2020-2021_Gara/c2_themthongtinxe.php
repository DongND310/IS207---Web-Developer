Thêm thông tin xe
<form action="themTTX.php" method="post">
    Họ tên khách hàng
    <?php
        include "connect.php";
        $sql = "SELECT * FROM KHACHHANG;";
        echo '<select name ="MAKH" id="MAKH">';
        $result = $connect->query($sql);
        while ($col = $result->fetch_row()){
            echo "<option value=".$col[0].">".$col[1]."</option>";
        }
        echo '</select>';
    ?><br>
    Số xe <input type="text" name="SOXE"><br>
    Hãng xe 
    <select name="HANGXE" multiple size="3">
        <option value="Toyota">Toyota</option>
        <option value="BMW">BMW</option>
        <option value="Audi">Audi</option>
    </select><br>
    Năm sản xuất <input type="text" name="NAMSX"><br>
    <input type="submit" value="Thêm">
</form>