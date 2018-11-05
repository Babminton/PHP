<?php
header("Content-Type: text/html; charset=utf-8");
if(isset($_POST['submit'])){
    if(empty($_POST['radio'])){
        echo '<script>alert("你未勾选记住密码");window.location.href="main.php";</script>';
    }else{
        setcookie("user[xm]",$_POST["xm"],time()+3600);
        setcookie("user[pwd]",$_POST["Pwd"],time()+3600);
        setcookie("user[rem]",$_POST["radio"],time()+3600);
        echo '<script>alert("你勾选了记住密码的操作");window.location.href="main.php";</script>';
    }
 }



