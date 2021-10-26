<?php
    if(isset($_REQUEST["submit"]))
    {
        foreach(glob("image/".$_REQUEST["a"]."/*.*") as $filename)
            {
                echo "<image src='$filename' width='100px' height='100px' />"."";
            }
    }
?>