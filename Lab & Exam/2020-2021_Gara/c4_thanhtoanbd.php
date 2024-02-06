<form action="updateBD.php" method="POST">
    <b>Thanh toán</b>
    <br>Số xe 
        <select name="MABD" id="SOXE"> </select>
    
    <br>Ngày nhận xe  <input type="date" name="NGAYNHAN" id="NGAYNHAN">
    <br>Thành tiền  <input type="text" id="ThanhTien" name="THANHTIEN">
    <div class="listCV"></div>
    <input type="submit" value="Thanh toán">
</form>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("input[type=date]").change(function(){
            var NGAYNHAN = $("#NGAYNHAN").val();
            $.ajax({
                method:"GET",
                url: "loadSX.php",
                data:{NGAYNHAN: NGAYNHAN},
                success:function(data)
                {
                    $("#SOXE").html(data);
                }
            });
        });
        $("body").on("change", "#SOXE", function(){
            var MABD = $("#SOXE").val();
            $.ajax({
                method:"GET",
                url: "loadCV.php",
                data:{MABD: MABD},
                success:function(data)
                {
                    $(".listCV").html(data);
                    var sum = 0;
                    $(".DonGia").each(function() {
                        sum += Number($(this).text());
                    });
                    $("#ThanhTien").val(sum);
                }
            });
        });
        $("body").on("click", ".xoa-cv", function(){
            var parent = $(this).parents('tr');
            var MACV = parent.find('.MACV').val();
            var MABD = $("#SOXE").val();
            $.ajax({
                method:"GET",
                url: "xoaCTBD.php",
                data:{MACV: MACV, MABD: MABD},
                success:function()
                {
                    parent.remove();
                }
            });
        });
    });
</script>