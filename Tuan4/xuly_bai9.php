<h1>Tuần 4 - Bài 9: Nhập thông tin sinh viên</h1>
<?php
    echo "<meta charset='UTF-8'>";
    if(isset($_POST["submit"])){
        $open=@fopen('sinhvien.txt',"a");
        fwrite($open,"Họ tên của sinh viên: ".$_POST["ten"].'<br>');
        fwrite($open,"Ngày tháng năm sinh: ".$_POST["ngaysinh"].'<br>');
        fwrite($open,"Lớp: ". $_POST["lop"].'<br>');
        fwrite($open,"Địa chi: ".$_POST["diachi"].'<br>'.'<br>');
        fclose($open);
        echo "Ghi file thành công !"."<br>";
    }
        $fp=@fopen('sinhvien.txt',"r");
        if(!$fp)
        {
            echo "Không thể mở file";
        }else
            $data=fread($fp, filesize('sinhvien.txt'));
            echo "<br>"."Thông tin sinh viên đã nhập:"."<br>";
            echo "<br>".$data;
            echo "<br>"."<a href='Bai9.php'>Quay lại</a>";
?>