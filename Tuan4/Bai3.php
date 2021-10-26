<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 3</title>
</head>
<body>
<h1>Tuần 4 - Bài 3: Xem ảnh</h1>
    <form action="xuly_bai3.php" method="post">
        <table>
            <tr>
                <td>Chọn ảnh:</td>
                <td>
                    <select name="a" id="">
                        <?php
                            foreach (glob("../Tuan4/image/upload/*.*") as $file) 
                            {
                                echo "<option value=" . $file ." >" .substr($file,9)."</option>";
                            }
                        ?>
                    </select>
                </td>
                <td>
                    <input type="submit" name="submit" value="Xem ảnh" id="">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>