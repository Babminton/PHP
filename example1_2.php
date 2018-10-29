<?php
header("Content-Type:text/html;charset=UTF-8");
session_start();
if (isset($_SESSION['user']))
    //如果$_SESSION['user']不为空
    echo "欢迎您，".$_SESSION["user"]."<br/>
	<a href='example1_3.php?action=logout'>注销</a> ";
else
    echo "未登录用户不允许访问";
?>
