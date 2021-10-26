<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 9</title>
</head>
<body>
<h1>Tuần 4 - Bài 9: Nhập thông tin sinh viên</h1>
    <form action="xuly_bai9.php" method="post">
        <fieldset style="width: 300px;">
            <legend>
                    <h3>Sinh viên nhập thông tin</h3>
            </legend>
            <table >
                <tr>
                    <td>Họ và tên:</td>
                    <td>
                        <input type="text" name="ten" id="">
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh:</td>
                    <td>
                        <input type="date" name="ngaysinh" id="">
                    </td>
                </tr>
                <tr>
                    <td>Lớp:</td>
                    <td>
                        <input type="text" name="lop" id="">
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td>
                        <input type="text" name="diachi" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input  type="submit" value="Thêm dữ liệu" name="submit" id="">
                    </td>
                </tr>
             </table>
        </fieldset>
    </form>
</body>
</html>