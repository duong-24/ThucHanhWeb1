<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
    <h1>Tuần 3 - Bài 1</h1>
    <form action="xuly_bai1.php" method="POST">
        <table>
            <tr>
                <td>First Name:</td>
                <td>
                    <input type="text" name="name1" />
                </td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>
                    <input type="text" name="name2" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="fSubmit" value="Submit" />
                </td>
                <td>
                    <input type="reset" name="fReset" value="Reset" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>