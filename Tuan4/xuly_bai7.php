<h1>Tuần 4 - Bài 7: Làm việc với File</h1>
<?php
    echo "<meta charset='UTF-8'>";
    if(isset($_POST["submit"]))
    {
        $open=@fopen('file_text.txt',"a"); //Mở file chỉ để ghi
        fwrite($open,$_POST["text"].'<br>');
        fclose($open);
        echo "Thêm dữ liệu vào file thành công !"."<br>"."<br>";
    }
        $fp=@fopen('file_text.txt',"r"); //Mở file chỉ để đọc
        if(!$fp)
        {
            echo "Không thể mở file";
        }else
            $data=fread($fp, filesize('file_text.txt'));
            echo $data."<br>";
        echo "<br>"."<a href='Bai7.php'>Quay lại</a>";
?>
<?php
    /*
    r: Mở file chỉ để đọc.
    w: Mở file chỉ để ghi. Xóa đi nội dung cũ hoặc tạo ra file mới nếu file không tồn tại.
    a: Mở file chỉ để ghi.
    x: Tạo file mới chỉ để ghi.
    r+: Mở file để đọc và ghi.
    w+: Mở file để đọc và ghi. Xóa đi nội dung cũ hoặc tạo ra file mới nếu file không tồn tại.
    a+: Mở file để đọc và ghi. Tạo ra file mới nếu file không tồn tại.
    x+: Tạo file mới để đọc và ghi.
    */
?>