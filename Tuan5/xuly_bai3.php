<?php
    echo "<meta charset='UTF-8'>";
    if(isset($_POST["submit"]))
    {
        if($_POST["dulieu"])
        {
            if(($_POST["dulieu"]) == "Tuấn Anh")
            // câu b
            {
                echo "Nhập dữ liệu thành công !"."<br>";
                echo "<br>"."<a href='Bai3.php'>Quay lại trang nhập liệu</a>";
            }
            // câu c
            else {
                echo "Nhập lại đúng dữ liệu để tiếp tục !";
                header("refresh:3, url='Bai3.php'");
            }
        // câu a
        }else {
            echo "Vui lòng nhập dữ liệu để tiếp tục !";
            header("refresh:3, url='Bai3.php'");
        }
    // câu d
    }else {
        echo "<script>
                alert('Bạn không có quyền truy cập !!!');
            </script>";
		header("refresh:0; url='Bai3.php'");
    }
?>