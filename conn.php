<?php
/**
 * Created by PhpStorm.
 * User: zeng
 * Date: 2018/11/24
 * Time: 15:47
 */
//数据库连接文件
date_default_timezone_set('PRC'); //设置中国时区
    header("Content-Type: text/html; charset=utf-8");
error_reporting(E_ALL ^ E_DEPRECATED); //降低报错级别
    $conn=mysqli_connect('localhost','root','123','php_mysql') or die('连接数据库出错'); //连接数据库服务器
    mysqli_query($conn,"set names 'utf8'");//设置字符集
    mysqli_select_db($conn,"php_mysql");	//选择数据库
?>
