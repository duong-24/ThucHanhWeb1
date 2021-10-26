<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 4</title>
</head>
<body>
<h1>Tuần 4 - Bài 4: Xem tất cả ảnh trong thư mục</h1>
    <form action="xuly_bai4.php" name="" enctype="multipart/form-data" method="post">
        <table style="margin: auto;background-color: #BBEEDB; width: 300px;border: 1px solid black;">
            <tr>
                <td colspan="2" style="text-align: center; background-color: #339999; color: white; font-size: 25px;">
                    Xem Thư Mục Hình Ảnh
                </td>
            </tr>
            <tr style="background-color: #BBEEDB;">
                <td>Chọn thư mục hình ảnh:</td>
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
            
            <!-- <tr style="background-color: #BBEEDB;">
                <td>Kích cỡ hiển thị ảnh:</td>
                <td>
                    <select name="b" id="">
                        <option value="100">100 x 100</option>
                        <option value="200">200 x 200</option>
                        <option value="300">300 x 300</option>
                        <option value="400">400 x 400</option>
                    </select>
                </td>
            </tr> -->
            
            <tr style="text-align: center;">
                <td colspan="2">
                    <input type="submit" name="submit" value="Xem hình ảnh" id="">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>