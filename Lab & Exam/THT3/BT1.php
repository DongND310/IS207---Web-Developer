<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table{
			margin: 0 auto;
			text-align: center;
		}
	</style>
</head>

<body>
    <form method="get" action="#">
        <table>

            <tr>
                <td colspan="2"><h3>Chu vi và diện tích hình chữ nhật</h3></td>
            </tr>
            <tr>
                <td>Chiều dài</td>
                <td><input type="input" name="chieudai"></td>
            </tr>
            <tr>
                <td>Chiều rộng</td>
                <td><input type="input" name="chieurong"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Tính"></td>
            </tr>
            <tr>
                <td colspan="2">
                
                <?php
                    if(isset($_GET['Submit'])&&($_GET['Submit']=="Tính"))
                    {
                        $chieudai= $_GET['chieudai'];
                        $chieurong= $_GET['chieurong'];
                        $dientich= (float)$chieudai * (float)$chieurong;
                        $chuvi = ((float)$chieudai+(float)$chieurong)*2;

                        echo "Diện tích:".$dientich."<br>";
                        echo "Chu vi:".$chuvi;
                    }
                ?>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php 
                    $cd = (double)$_POST['cd'];
                    $cr = (double)$_POST['cr'];
                    $cv = ($cd * $cr); 
                    if(isset($_POST['submit']) && $_POST['submit'] == 'Tính'){
                        echo "Diện tích : ".$cv;
                    }
                ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>