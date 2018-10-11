<?php
/**
 * Created by PhpStorm.
 * User: zeng
 * Date: 2018/9/29
 * Time: 17:41
 */
class VeriCode
{
    public $type, $length, $clear;

    function __construct($type, $length, $clear = true)   //传值
    {
        $this->type = $type;
        $this->length = $length;
        $this->clear = $clear;
    }

   function generate()

    {
    $nums = range(0, 9); // 数字数组
    $lower = range('a', 'z'); // 小写字母数组
    $upper = range('A', 'Z'); // 大写字母数组
    $ignore = array('0', 'o', 'O', '1', 'l', 'I', '9', 'q'); // 难辨认的字符数组

    $chars = array();  //声明数组
if ($this->type==1)
$chars = $nums; // 只需要数字数组
else if ($this->type==2)
$chars = array_merge($nums, $lower); // 数字+小写字母
else if ($this->type==3)
$chars = array_merge($nums, $lower, $upper); // 数字+小写字母+大写字母

if ($this->clear)
$chars = array_diff($chars, $ignore); // 排除难辨认字符

$keys = array_rand($chars, $this->length); // 随机取出length个字符，返回它们的键名   $keys  是个数组
$code = "";
foreach ($keys as $valuekey)
$code .= $chars[$valuekey]; // 通过key可以去$chars中找到具体的值，并在循环中拼接起来

echo $code;
}
}
    $code = new VeriCode(3,4,true);
   $code->generate();
  // echo $code->getCode();
