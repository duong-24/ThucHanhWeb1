<?php
    echo "<meta charset='UTF-8'>";
    if(isset($_POST["submit"])){
        echo '<img src='.$_POST['a'].'>'.'<br>';
        echo "<br>"."<a href='Bai5_a.php'>Quay lại</a>";
    }
?>