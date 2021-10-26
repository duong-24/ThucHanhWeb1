<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 5 - Bài 4</title>
</head>
<body>
<h1>Tuần 5 - Bài 4: Upload hình ảnh</h1>
    <form action="xuly_bai4.php" name="form_upload" enctype="multipart/form-data" method="post">
        <fieldset style="width: 330px;">
            <legend>
                <h3>Upload hình ảnh</h3>
            </legend>
            <tr>
                <td>
                    Chọn hình ảnh:
                </td>
                <td>
                    <input type="file" name="myfile" />
                </td>
                <td >
                    <input type="submit" name="upload" value="Upload" id="">
                </td>
            </tr>
        </fieldset>
    </form>
</body>
</html>