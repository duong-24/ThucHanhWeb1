<h1>Tuần 4 - Bài 3: Xem ảnh</h1>
<?php
    echo "<meta charset='UTF-8'>";
    if(isset($_POST["submit"])){
        echo '<img src='.$_POST['a'].'>'.'<br>';
        echo "<br>"."<a href='Bai3.php'>Quay lại</a>";
    }
?>