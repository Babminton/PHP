<?php
/**
 * Created by PhpStorm.
 * User: zeng
 * Date: 2018/10/18
 * Time: 18:05
 */
header("Content-Type:text/html;charset=UTF-8");
?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
<script src="jquery-3.2.1.min.js"></script>
<script>
    function checkAll(){
        $("input:checkbox").each(function(){
            this.checked=true;
        });
    }
    function Uncheck1(){
        $("input:checkbox").each(
            function(){
                this.checked=false;

            });
    }

</script>
    </head>
<body>
<form method="post" action="post.php">
    <input type="checkbox" name="option[]" value="1">&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php? id=1">项目1</a><br>
    <input type="checkbox" name="option[]" value="2">&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php? id=2">项目2</a><br>
    <input type="checkbox" name="option[]" value="3">&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php? id=3">项目3</a><br>
    <input type="checkbox" name="option[]" value="4">&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php? id=4">项目4</a><br>
    <input type="checkbox" name="option[]" value="5">&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php? id=5">项目5</a><br>
    <input type="checkbox" name="option[]" value="6">&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php? id=6">项目6</a><br>
    <input type="checkbox" name="option[]" value="7">&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php? id=7">项目7</a><br>
    <input type="checkbox" name="option[]" value="8">&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php? id=8">项目8</a><br>
    <input type="checkbox" name="option[]" value="9">&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php? id=9">项目9</a><br>
    <input type="checkbox" name="option[]" value="10">&nbsp;&nbsp;&nbsp;&nbsp;<a href="detail.php? id=10">项目10</a><br>
    <p onclick="checkAll()" >全选</p>
    <p onclick="Uncheck1()">取消全选</p>
    <input type="submit" value="提交">
</form>
</body>
</html>
