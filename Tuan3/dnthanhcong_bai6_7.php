<?php
    session_start();
    if(isset($_REQUEST["dangnhap1"])){
        // $email=$_REQUEST["mail"];
        // $pass=$_REQUEST["pass"];
        if($_SESSION["email"]==$_REQUEST['mail'] && $_SESSION["matkhau"]==$_REQUEST['pass'])
        {
            echo "Chúc mừng bạn ".$_REQUEST['hoten']."đăng nhập thành công";
            header("refresh: 4; url= 'Bai6_7.php'");
        }
        else 
        {
            echo header("refresh: 4; url='Bai6_7.php'");
        }
    }else 
    {
        echo header("refresh: 4; url='Bai6_7.php'");
    }   
?>