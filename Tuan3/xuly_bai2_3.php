<?php
    if (isset($_GET["tinh"]))
    {
        if (isset($_GET['so1']))
        {
            $so1 = $_GET['so1'];
        }
        if (isset($_GET['so2']))
        {
            $so2 = $_GET['so2'];
        }
        if (isset($_GET['chon']))
        {
            $chon = $_GET['chon'];
        }
        if(is_numeric($so1) && is_numeric($so2))
        {
            $giatri = 0;
        } else $giatri= "Lỗi phép tính"; 
        echo header("refresh:10, url='Bai2_3.php'"); // Bài 3 // 
        switch ($chon)
        {
            case "Cộng":
                $giatri = $so1 + $so2;
                break;
            case "Trừ":
                $giatri = $so1 - $so2;
                break;
            case "Nhân":
                $giatri = $so1 * $so2;
                break;
            case "Chia":        
            if($so2==0){
                $giatri= "Lỗi phép tính";
            } else
                $giatri = $so1 / $so2;        
            break;
        }
    }
?>
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
    <form action="#">
        <h3 style="color: blue;">PHÉP TÍNH TRÊN HAI SỐ</h3>
        <table>
            <tr style="color: red;">
                <td>Chọn phép tính: </td>
                <td>
                    <p>
                        <?php echo $chon;?>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="color: blue; text-align: right;">Số thứ nhất:</td>
                <td>
                    <input type="text" name="so1" id="" value="<?php if(isset($_REQUEST['so1'])) echo $so1; ?>">
                </td>
            </tr>
            <tr>
                <td style="color: blue; text-align: right;">Số thứ hai:</td>
                <td>
                    <input type="text" name="so2" id="" value="<?php if(isset($_REQUEST['so2'])) echo $so2; ?>">
                </td>
            </tr>
            <tr>
                <td style="color: blue; text-align: right;">Kết quả:</td>
                <td>
                    <input type="text" name="ketqua" id="" disabled="true" value="<?php echo $giatri;?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href="Bai2_3.php">Quay lại trang trước</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>