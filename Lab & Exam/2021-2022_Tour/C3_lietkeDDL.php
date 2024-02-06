<b>Liệt kê điểm du lịch</b>
<table border="1"> 
    <tr> 
        <th>STT</th> 
        <th>Mã điểm du lịch</th> 
        <th>Tên điểm du lịch</th> 
        <th>Tên thành phố</th> 
        <th>Đặc trưng</th> 
        <th>Chức năng</th> 
    </tr> 
    <?php  
        include "connect.php";
        $sql =  "SELECT D.MaDDL, TenDDL, DacTrung, T.TenTTP 
                    FROM DIEMDL D, TINHTP T, CHITIET C WHERE D.MaTTP = T.MaTTP AND D.MaDDL = C.MaDDL
                    GROUP BY D.MaDDL";
        $result = $connect->query($sql); 
        $index = 1; 
        while ($row = $result->fetch_row()){
            echo "
                <tr>
                    <td>$index</td>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[3]</td>
                    <td>$row[2]</td>
                    <td>
                        <a href='C3_update.php?MaDDL=$row[0]' > <button type='button'class='ViewDDL'>View</button> </a>
                        <button type='button'class='DeleteDDL'>Delete</button>
                        <input type='hidden' class='MaDDL' value ='$row[0]'>
                    </td>
                </tr>";               
            $index += 1;  
        }        
    ?>      
</table> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("body").on("click", ".DeleteDDL", function(){
            var parent = $(this).parents('tr');
            var MaDDL = parent.find('.MaDDL').val();
            $.ajax({
                method:"GET",
                url: "C3_delete.php",
                data:{MaDDL: MaDDL},
                success:function()
                {
                    parent.remove();
                }
            });
        });
    });
</script>