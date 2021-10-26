<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 6</title>
</head>
<body>
<h1>Tuần 4 - Bài 6: Làm việc với Seccsion</h1>
    <div>
        <form action="xuly_bai6.php" method="post">
            <fieldset style="width: 300px;">
                <legend>
                    <h3>Đăng nhập</h3>
                </legend>
                <table >
                    <tr>
                        <td>Tên đăng nhập:</td>
                        <td>
                            <input type="text" name="tendangnhap" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
                        <td>
                            <input type="password" name="matkhau" id="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input  type="submit" value="Đăng nhập" name="dangnhap" id="">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>