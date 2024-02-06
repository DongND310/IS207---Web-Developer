<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 5</title>
</head>
<body>
    <b>Liệt kê</b><br>
    <br>Chọn số lần bảo dưỡng <input type="text" id="SoLanBD" /> 
    <div id="ListBD"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script>
        $(document).ready(function(){
            $("#SoLanBD").change(function(){
                var SoLanBD = $(this).val();
                    $.ajax({
                        url: "lietkeBD.php",
                        method: "GET",
                        data: {SoLanBD: SoLanBD},
                        success:function(data)
                        {
                            $("#ListBD").html(data);
                        }
                    });
                });
          });
    </script>
</body>
</html>