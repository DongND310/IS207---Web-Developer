<b>Liệt kê danh sách công dân</b>
<table border="1"> 
    <tr> 
        <th>STT</th> 
        <th>Tên công dân</th> 
        <th>Giới tính</th> 
        <th>Năm sinh</th> 
        <th>Nước về</th> 
        <th>Chức năng</th> 
    </tr> 
    <?php  
        include "connect.php";
        $sql =  "SELECT C.MaCD, TenCD, GioiTinh, NamSinh, NuocVe 
                FROM CONGDAN C JOIN CD_TC T ON C.MaCD = T.MaCD GROUP BY C.MACD";
        $result = $connect->query($sql); 
        $index = 1; 
        while ($row = $result->fetch_row()){
            echo "
                <tr>
                    <td>$index</td>
                    <td>$row[1]</td>
                    <td> ";
                    if ($row[2]==1) {
                        echo "Nam";
                    } else {
                        echo "Nữ"; }
                    echo "</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
                    <td>
                        <input type='hidden' class='MaCD' value ='$row[0]'>
                        <a href='C3_view.php?MaCD=$row[0]' > <button type='button'class='ViewCD'>View</button> </a>
                        <button type='button'class='DeleteCD'>Delete</button>
                    </td>
                </tr>";               
            $index += 1;  
        }        
    ?>      
</table> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("body").on("click", ".DeleteCD", function(){
            var parent = $(this).parents('tr');
            var MaCD = parent.find('.MaCD').val();
            $.ajax({
                method:"GET",
                url: "c3_delete.php",
                data:{MaCD: MaCD},
                success:function()
                {
                    parent.remove();
                }
            });
        });
    });
</script>