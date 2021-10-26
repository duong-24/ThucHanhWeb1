<?php
echo "<meta charset='UTF-8'>";
    if(isset($_POST["submit"]))
    {
        if($_POST['chon']=='200'){
            echo '<img src='.$_REQUEST['a'].' alt="" width="200px"; height="200px">';
        }
        elseif($_POST['chon']=='300'){
            echo '<img src='.$_REQUEST['a'].' alt="" width="300px"; height="300px">';
        }
        elseif($_POST['chon']=='400'){
            echo '<img src='.$_REQUEST['a'].' alt="" width="400px"; height="400px">';
        }
        else echo "Lỗi";
    }
?>