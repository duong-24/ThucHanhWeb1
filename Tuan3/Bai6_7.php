<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Bài 6-7</title>
    <style>
        #menu{
            text-align:center;
            border-bottom: 1px solid #000;
            margin-top: 5px;
            background-color:#000;
            color: white;
        }
        tr{
            border: 1px solid;
        }
        a{
            text-decoration:none;
        }
        a:hover{
            background-color:red;
        }
    </style>
</head>
<body>
    <h1>Tuần 3 - Bài 6-7</h1>
    <table style="margin: auto; width:800px;" border=1>
        <tr>
            
            <td style="width:20%; vertical-align:top">
                <h3 id="menu">MENU</h3>
                <a href="Bai6_7.php">Trang chủ</a> 
            </br>
                    <?php
                    if(isset($_SESSION["dn"]) && $_SESSION["dn"]==true)
                        {
                            echo "<a href='Bai6_7.php?dangxuat'>Đăng xuất</a>";
                        }
                        elseif(isset($_SESSION["dk"]) && isset($_SESSION["dk"]) == true)
                        {
                            echo "<a href='Bai6_7.php?dangnhap'>Đăng nhập</a>";
                        }
                        else
                        {
                            echo " <a href='Bai6_7.php?dky'>Đăng ký</a>";
                        }
                    ?>
                   
            </td>
            <td style="width: 80%; vertical-align: top;">
                    <?php
                        if(isset($_REQUEST["dky"]))
                        {
                            include "dangky_bai6_7.php";
                        }   
                        elseif(isset($_REQUEST["dkthanhcong"]))
                        {
                            include "dkthanhcong_bai6_7.php";
                            $_SESSION["dk"]= true;
                        }
                        elseif(isset($_REQUEST["dangnhap"]))  
                        {
                            include "dangnhap_bai6_7.php";
                            $_SESSION["dk"]= true;
                        }    
                        elseif(isset($_REQUEST["dnthanhcong"]))
                        {
                            include "dnthanhcong_bai6_7.php";                               
                            $_SESSION["dn"]=true;
                        }
                        elseif(isset($_REQUEST["dangxuat"]))
                        {
                            include "dangxuat_bai6_7.php";
                            $_SESSION["dn"]=true;
                        }                            
                        else
                        echo "Chào mừng bạn đến với lớp học PHP !";         
                    ?>
            </td>
        </tr>
    </table>
</body>
</html>




