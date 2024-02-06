<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê tour</title>
</head>
<body>
    <b>Liệt kê tour theo số điểm du lịch</b><br>
    <br>Số điểm du lịch đi qua <input type="text" id="SoDDL" /> 
    <div id="ListDDL"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script>
        $(document).ready(function(){
            $("#SoDDL").change(function(){
                var SoDDL = $(this).val();
                    $.ajax({
                        url: "lietkeTourDDL.php",
                        method: "GET",
                        data: {SoDDL: SoDDL},
                        success:function(data)
                        {
                            $("#ListDDL").html(data);
                        }
                    });
                });
          });
    </script>
</body>
</html>