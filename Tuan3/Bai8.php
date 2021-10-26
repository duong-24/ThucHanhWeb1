<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8</title>
</head>
<body>
    <h1>Tuần 3 - Bài 8</h1>
    <form action="xuly_bai8.php" method="post" name="anh">
        <table>
            <tr>
                <td>Mời chọn hình:</td>
                <td>
                <select name="a" id="">
                    <?php
                        foreach (glob("anh_bai8/*.*") as $file) 
                            {
                                echo "<option value=".$file." >".substr($file,9) ."</option>";
                            }
                    ?> 
                </select >
                </td>
            </tr>
            <tr>
                <td>Chọn kích thước:</td>
                <td>      
                    <input type="radio" name="chon" value="200" id=""> 200
                    <input type="radio" name="chon" value="300" id=""> 300
                    <input type="radio" name="chon" value="400" id=""> 400
                </td>
            </tr>      
            <tr>
                <td>
                    <input type="submit" name="submit" value="Xác nhận" id="">
                </td>
            </tr>
        </table>        
    </form>
</body>
</html>