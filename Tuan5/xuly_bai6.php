<?php
    echo "<meta charset='UTF-8'>";
    if (isset($_POST["submit"])) 
    {
        if ($_POST["email"] && $_POST["pass"] && $_POST["nlpass"]) 
        {
        // câu a
            $email = "/^([0-9A-Za-z]{6,}+\@gmail.com)$/";
        // câu b
            $pass = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";
            if (preg_match($email, $_POST["email"], $match)) 
            {
                if (preg_match($pass, $_POST["pass"], $match)) 
                {
                    if ($_POST["pass"] == $_POST["nlpass"]) 
                    {// câu d
                        echo "<script>alert('Đăng ký thành công ! Dữ liệu đã được lưu vào file.')</script>";
                        $open=@fopen('dulieu_dangky.txt','a');
                        fwrite($open,"Email: ".$_POST["email"]."\n");
                        fwrite($open,"Mật khẩu: ".$_POST["pass"]."\n"."\n");
                        fclose($open);                    
                        header("refresh: 0; url = 'Bai6.php'");
                    }// câu b (iii)
                    else {
                        echo "<script>
                                alert('Nhập lại mật khẩu không đúng!')
                            </script>";
                        header("refresh: 0; url = 'Bai6.php'");
                    }
                }// câu b (i và ii)
                 else {
                    echo "<script>
                            alert('Mật khẩu phải gồm 8 ký tự trở lên gồm cả chữ và số')
                        </script>";
                    header("refresh: 0; url = 'Bai6.php'");
                }
            } else {
                echo "<script>
                        alert('Bạn đã nhập sai email. Vui lòng nhập lại')
                    </script>";
                header("refresh: 0; url = 'Bai6.php'");
            }
        }// câu c
        else {
            echo "<script>
                    alert('Vui lòng điền đầy đủ thông tin')
                </script>";
            header("refresh: 0; url = 'Bai6.php'");
        }
    }
?>
