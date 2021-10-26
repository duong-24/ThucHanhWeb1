<?php
    session_start();
    if(isset($_REQUEST["submit"])){
        echo "Email: " .$_REQUEST['mail']."</br>"; 
        echo "Password: " .$_REQUEST['pass']. "</br>";
        echo "Nhập lại password: " .$_REQUEST['nlpass']. "</br>";
        echo "Họ và tên: " .$_REQUEST['hoten']."</br>";
        echo "Địa chỉ: ". $_REQUEST['diachi'] ."</br>";
        echo "Điện thoại: " .$_REQUEST['dienthoai']."</br>";
        echo "Giới tính: " .$_REQUEST['gioitinh']."</br>";
        echo "Sở thích: ";
        foreach($_REQUEST["sothich"] as $value){
            echo $value." ";
        }
        echo "</br>";
        echo "Chúc mừng bạn đăng ký thành công, click <a href='Bai6_7.php'>
        vào đây</a> để chuyển về trang chủ nếu hệ thống không tự chuyển";
        echo header("refresh: 5; url='Bai6_7.php'");
        $_SESSION["email"] = $_REQUEST['mail'];
        $_SESSION["hoten"] = $_REQUEST['hoten'];
        $_SESSION["matkhau"] = $_REQUEST['pass'];
    }
?>