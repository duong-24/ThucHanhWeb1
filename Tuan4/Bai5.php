<?php
    setcookie("Anh", "Lê Tuấn Anh", time() + 3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 5</title>
</head>
<body>
<h1>Tuần 4 - Bài 5: Làm việc với Cookie</h1>
    <?php
        if(isset($_COOKIE["Anh"]))
        {
            echo $_COOKIE["Anh"];
        }
        else
            echo "Cookie bị chết vì hết thời gian tồn tại.";
    ?>
</body>
</html>