<?php
    $MaCD = $_GET["MaCD"];
    include "connect.php";
    $sql =  "SELECT T.MaTC, TenTC, C.MaCD FROM trieuchung T JOIN cd_tc C 
            ON T.MaTC = C.MaTC AND C.MaCD = '$MaCD'";
    $result = $connect->query($sql);
    $output = " <b><br>Danh sách các triệu chứng <br></b>
        <table border = 1 >
            <tr>
                <th>STT</th>
                <th>Mã triệu chứng</th>
                <th>Tên triệu chứng</th>
            </tr>";
    $index = 1; 
    while ($row = $result->fetch_row()){
        $output .="
            <tr>
                <td>$index</td>
                <td>$row[0]</td>
                <td>$row[1]</td>
            </tr>";             
            $index += 1;  
    }
    $output.="</table>";
    $connect->close();
    echo $output;
?>