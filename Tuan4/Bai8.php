<?php
    session_start();
    echo "<meta charset='UTF-8'>";
    if(isset($_SESSION['truycap']))
    {
        $_SESSION['truycap']+=1;
    }
    else $_SESSION['truycap']=1;
    $fp=@fopen('solantruycap_website.txt','w');
    if(!$fp)
    {
        echo "Không mở được file";
    }else
        fwrite($fp,"Số lần truy cập là: ".$_SESSION['truycap']." lần.");
        fclose($fp);
        echo "Số lần truy cập đã cập nhật";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 8</title>
</head>
<body>
<h1>Tuần 4 - Bài 8: Đếm số lần truy cập vào Website</h1>
    <form action="xuly_bai8.php" method="post">
        <input type="submit" name="submid" value="Xem số lần truy cập" id="">
    </form>
</body>
</html>