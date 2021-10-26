<h1>Tuần 4 - Bài 4: Xem tất cả ảnh trong thư mục</h1>
<?php
    if(isset($_REQUEST["submit"]))
    {
        foreach(glob("image/".$_REQUEST["a"]."/*.*") as $filename)
            {
                echo "<image src='$filename' width='100px' height='100px' />"."";
            }
    }
?>