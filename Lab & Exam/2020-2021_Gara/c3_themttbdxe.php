<b>Thêm bảo dưỡng</b>
<form action="themBD.php" method="post">
    Số xe <input type="text" name="SOXE" id="SOXE"><br>
    Họ tên khách hàng <input type="text" name="HOTENKH" id="HOTENKH"><br>
    Mã bảo dưỡng <input type="text" name="MABD"><br>
    Số KM <input type="text" name="SOKM"><br>
    Nội dung <input type="text" name="NOIDUNG"><br>
    <input type="submit" value="Thêm">
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script>
    $(document).ready(function(){
        $('#SOXE').change(function(){
            var SOXE = $('#SOXE').val();
            $.ajax({
                url: 'gettenKH.php',
                type: 'GET',
                data:{SOXE: SOXE},
                success:function(result){
                    $('#HOTENKH').val(result);
                }
            });
        });
    });
</script>