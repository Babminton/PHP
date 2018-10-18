<?php
/**
 * Created by PhpStorm.
 * User: zeng
 * Date: 2018/10/18
 * Time: 16:55
 */
header("Content-Type:text/html;charset=UTF-8");
 $x=$_POST['option'];
  $string="";
   foreach($x as $va){
       echo "你已经提交第".$va."个项目"."<br>";
   }
