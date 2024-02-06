    <?php
        include "connect.php";
        $MAKH = $_POST['MAKH'];
        $HOTENKH=$_POST['HOTENKH'];
        $DIACHI=$_POST['DIACHI'];
        $DIENTHOAI=$_POST['DIENTHOAI'];
        $sql ="INSERT INTO KHACHHANG VALUES('$MAKH','$HOTENKH','$DIACHI','$DIENTHOAI')";
        if ($connect->query($sql) === TRUE)
        {
            echo "Thêm khách hàng thành công.";
        }
        else
        {
            echo "Thêm khách hàng không thành công." .$connect->error;
        }
        $connect->close();
    ?>