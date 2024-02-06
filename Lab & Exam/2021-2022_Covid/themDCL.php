    <?php
        include "connect.php";
        $MaDCL = $_POST['MaDCL'];
        $TenDCL=$_POST['TenDCL'];
        $DiaChi=$_POST['DiaChi'];
        $SucChua=$_POST['SucChua'];
        $sql ="INSERT INTO DIEMCACHLY VALUES('$MaDCL','$TenDCL','$DiaChi','$SucChua')";
        if ($connect->query($sql) === TRUE)
        {
            echo "Thêm điểm cách ly thành công.<br>";
        }
        else
        {
            echo "Thêm điểm cách ly không thành công." .$connect->error;
        }
        $connect->close();
    ?>