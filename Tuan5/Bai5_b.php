<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 5 - Bài 5</title>
</head>
<body>
<h1>Tuần 5 - Bài 5(câu b): Xem tất cả ảnh trong thư mục</h1>
    <form action="xuly_bai5_b.php" name="xem_file_anh" enctype="multipart/form-data" method="post">
        <fieldset style="width: 250px;">
            <legend>
                <h3>Xem file hình ảnh</h3>
            </legend>
            <table>
                <tr>
                    <td>
                        Chọn file:
                    </td>
                    <td>
                        <select name="a" id="">
                            <?php
                                $result = scandir("image");
                                $files = array_diff($result, array('.','..'));
                                if (count($files) > 0)
                                {
                                    foreach($files as $file)
                                    {
                                        if(isset($_REQUEST["submit"]))
                                        {
                                            if($file == $_REQUEST["a"])
                                            {
                                                echo "<option value='$file' selected>".$file."</option>";
                                            }else
                                            {
                                                echo "<option value='$file'>".$file."</option>";
                                            }
                                        }else
                                        {
                                            echo "<option value='$file'>".$file."</option>";
                                        }
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kích cỡ hiển thị:</td>
                    <td>100 x 100</td>
                </tr>
                <tr style="text-align: center;">
                    <td colspan="2">
                        <input type="submit" name="submit" value="Xem hình ảnh" id="">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>