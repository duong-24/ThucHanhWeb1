<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 5 - Bài 6</title>
</head>
<body>
<h1>Tuần 5 - Bài 6: Tạo form đăng kí</h1>
    <form action="xuly_bai6.php" method="post">
        <fieldset style="width: 400px;">
            <legend>
                <h3>Form Đăng Ký</h3>
            </legend>
            <table>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input style="width: 250px;" type="email" name="email" id="">
                    </td>
                </tr>
                <tr>
                    <td>Mật khẩu:</td>
                    <td>
                        <input style="width: 250px;"type="password" name="pass" id="">
                    </td>
                </tr>
                <tr>
                    <td>Nhập lại mật khẩu:</td>
                    <td>
                        <input style="width: 250px;" type="password" name="nlpass" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" name="submit" value="Đăng ký" id="">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>