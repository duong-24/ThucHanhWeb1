<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 5 - Bài 5</title>
</head>
<body>
<h1>Tuần 5 - Bài 5(câu a): Xem ảnh có trong file chỉ định</h1>
    <form action="xuly_bai5_a.php" method="post">
        <fieldset style="width: 650px;">
            <legend>
                <h3>Xem hình ảnh</h3>
            </legend>
            <tr>
                <td>
                    Chọn hình ảnh:
                </td>
                <td>
                    <select name="a" id="">
                        <?php
                            foreach (glob("../Tuan5/image/Upload/*.*") as $file) 
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
        </fieldset>
    </form>
</body>
</html>