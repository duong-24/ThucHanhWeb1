<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2-3</title>
</head>
<body>
    <h1>Tuần 3 - Bài 2-3</h1>
    <form action="xuly_bai2_3.php" method="get">
        <h3 style="color: blue;">PHÉP TÍNH TRÊN HAI SỐ</h3>
        <table>
            <tr style="color: red;">
                <td>Chọn phép tính:</td>
                <td>
                    <input type="radio" name="chon" value="Cộng" id="" />Cộng
                    <input type="radio" name="chon" value="Trừ" id="" />Trừ 
                    <input type="radio" name="chon" value="Nhân" id="" />Nhân
                    <input type="radio" name="chon" value="Chia" id="" />Chia
                </td>
            </tr>
            <tr style="color: blue;text-align: right;">
                <td>Số thứ nhất:</td>
                <td>
                    <input type="text" name="so1" id=""> 
                </td>
            </tr>
            <tr style="color: blue;text-align: right;">
                <td>Số thứ hai:</td>
                <td>
                    <input type="text" name="so2" id="">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="tinh" value="Tính" id="" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>