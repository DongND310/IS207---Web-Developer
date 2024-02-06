<form action="#" method="POST">
    <br>Tên điểm cách ly <select name="MaDCL" id="TenDCL"> 
        <?php
            include "connect.php";
            $sql = "SELECT * FROM DIEMCACHLY";
            $result = $connect->query($sql);
            echo "<option value=''> </option>";
            while($row = $result->fetch_row()) {
                echo "<option value=".$row[0].">".$row[1]."</option>"; } 
            $connect->close();
        ?>
    </select><br>
    <br>Tên công dân <select name="MaCD" id="TenCD"> </select>   
    <div class="listTC"></div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#TenDCL").change(function(){
            var MaDCL = $(this).val();
            $.ajax({
                method:"GET",
                url: "loadCD.php",
                data:{MaDCL: MaDCL},
                success:function(data)
                {
                    $("#TenCD").html(data);
                }
            });
        });
        $("#TenCD").change(function(){
            var MaCD = $(this).val();
            $.ajax({
                method:"GET",
                url: "loadTC.php",
                data:{MaCD: MaCD},
                success:function(data)
                {
                    $(".listTC").html(data);
                }
            });
        });
    });
</script>