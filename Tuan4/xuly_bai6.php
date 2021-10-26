<h1>Tuần 4 - Bài 6: Làm việc với Seccsion</h1>
<?php 
    echo "<meta charset='UTF-8'>";
    if(isset($_POST["dangnhap"]))
    {
        $user=$_POST["tendangnhap"];
        $pass=$_POST["matkhau"];
            if($user=='admin' && $pass=='123456')
            {
                echo "Đăng nhập thành công !";
                //$_SESSION["login"]=true;
                if(isset($_POST["save"]))
                {
                    $_SESSION["user"]=$_POST["tendangnhap"];
                    $_SESSION["pass"]=$_POST["matkhau"];
                }
                echo "<br>"."<br>"."<a href='Bai6.php'>Quay lại</a>";
            }
            else{
                echo "Đăng nhập thất bại, vui lòng nhập lại thông tin.";
                header("refresh:3, url='Bai6.php'");
            }   
    }else{
		echo "<script>
                alert('Bạn không có quyền truy cập !!!');
            </script>";
		header("refresh:0; url='Bai6.php'");
	}
?>