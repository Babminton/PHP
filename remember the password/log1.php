<?php
header("Content-Type: text/html; charset=utf-8");
//尝试获取指定的Cookie变量，如果有
if(isset($_COOKIE["user"]["xm"])){
?>
        <html><body>
        <div style="border:1px solid #06f; background:#bbdeff; width: 15%">
            <form method="post" action="log2.php"
                style="margin:4px;">
                <p>帐号: <input name="xm" type="text" size="12" value="<?=$_COOKIE["user"]["xm"]; ?>"></p>
                <p>密码: <input name="Pwd" type="password" size="12" value="<?=$_COOKIE["user"]["pwd"]; ?>"></p>
                <p><input type="radio" name="radio" value="50" checked="checked"/>记住密码</p>
                <input type="submit" name="submit" value="登 录">
            </form></div></body></html>
<?php
}
else			//没有Cookie则显示登录表单
    echo '<html><body>
<div style="border:1px solid #06f; background:#bbdeff; width: 15%">
  <form method="post" action="log2.php"
   style="margin:4px;">
    <p>帐号: <input name="xm" type="text" size="12"></p>
    <p>密码: <input name="Pwd" type="password" size="12"></p>
    <p><input type="radio" name="radio" value="50"/>记住密码</p>
		<input type="submit" name="submit" value="登 录">
  </form></div></body></html>'
?>
