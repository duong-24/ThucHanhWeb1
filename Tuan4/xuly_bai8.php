<h1>Tuần 4 - Bài 8: Đếm số lần truy cập vào Website</h1>
<?php
    echo "<meta charset='UTF-8'>";
    if(isset($_POST["submit"]))
    {
        $open=@fopen('slolantruycap_website.txt',"r"); 
        fwrite($open,$_POST["text"].'<br>');
        fclose($open);
    }
        $fp=@fopen('solantruycap_website.txt',"r");
        if(!$fp)
        {
            echo "Không thể mở file";
        }else
            $data=fread($fp, filesize('solantruycap_website.txt'));
            echo $data;
        echo "<br>"."<br>"."<a href='Bai8.php'>Quay lại</a>";
?>