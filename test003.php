<?php
/**
 * Created by PhpStorm.
 * User: zeng
 * Date: 2018/10/25
 * Time: 20:48
 */
header("Content-Type:text/html;charset=UTF-8");
if(isset($_POST['queding'])) {
    $m = $_POST['a'];
    $s = count($m);
    $flags1 = "";
    $flags2 = "";
    $flags3 = "";
    if ($s > 3) {
        echo "选错了";
    } else if ($s <= 3) {
        foreach ($m as $value) {
            switch ($value) {
                case 2:
                    $flags1++;
                    break;
                case 4:
                    $flags1++;
                    break;
                case 5:
                    $flags1++;
                    break;
                default:
                    $flags2++;
                    break;
            }
        }
        if($flags2!=0) echo "选错了";
        else if($flags1==3) echo "选对了";
        else echo "选少了";
    }
}
?>
<h3>1.以下属于Web开发语言的有几种？</h3>
<form method="post" action="">
    Ajax<input type="checkbox" name="a[]" value="1">
    PHP<input type="checkbox" name="a[]" value="2">
    Flash<input type="checkbox" name="a[]" value="3">
    ASP<input type="checkbox" name="a[]" value="4">
    JSP<input type="checkbox" name="a[]" value="5">
    <input type="submit" name="queding" value="确定">
</form>
