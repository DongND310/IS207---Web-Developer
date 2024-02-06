<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        background-color: #fff;
    }

    input[type="submit"] {
        border-radius: 8px;
        margin: 8px 0;
    }
</style>
<?php
    echo "Danh sách các chi nhánh";
    
        include "connect.php";
        $sql = "select * from CHINHANH where MaCongTy='CT01'";
        $result = $connect->query($sql);
        {
        if ($result->num_rows > 0) {
            echo "<table border='1' cellspacing='0'>";
            echo "<tr><th>STT</th><th>Mã chi nhánh</th><th>Tên chi nhánh</th></tr>"; 
            $stt=1;
            while($row = $result->fetch_row()) {
                echo "<tr>"; echo"<td>$stt</td><td>$row[0]</td><td>$row[1]</td>";
                echo "</tr>";
                $stt++; 
            }
        }else {
            echo "<br>Không có dòng nào";
        }
        $connect->close();
    }
?>
