<?php
/**
 * Created by PhpStorm.
 * User: zeng
 * Date: 2018/11/24
 * Time: 18:25
 */
include "conn.php";
if(isset($_GET['page'])&&(int)$_GET['page']>0){
    $Page=$_GET['page'];
}else $Page=1;
$PageSize=10;        //每页显示记录条数
$sql1="select count(ID) from test001";
$r1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_row($r1);
$RecordCount=$row[0];
$PageCount=ceil($RecordCount/$PageSize);
$sql2="select *from test001 limit " . (($Page-1)*$PageSize).",".$PageSize;
$r2=mysqli_query($conn,$sql2);
?>
<h2 align="center">分页显示记录</h2>
<table border="1" width="90%">
    <tr>
        <th>ID</th>  <th>用户名</th>  <th>标题</th>  <th>内容th>  <th>邮箱</th>  <th>时间</th>
    </tr>
    <?php  while($rows=mysqli_fetch_assoc($r2)){ ?>
      <tr>
          <td><?=$rows['ID'] ?><td><?=$rows['author'] ?><td><?=$rows['title'] ?>
          <td><?=$rows['content'] ?><td><?=$rows['email'] ?><td><?=$rows['date'] ?>
      </tr>
<?php
}
    mysqli_free_result($r2);
?>
</table>
<p>
    <?php
    if($Page==1)
    echo "第一页 上一页";
    else echo "<a href='?page=1'>第一页</a>&nbsp;&nbsp;<a href='?page=".($Page-1)."'>上一页</a> ";
    for($i=1;$i<=$PageCount;$i++) {

        if ($i == $Page) {
            echo $i;
        } else echo "<a href='?page=$i'>$i</a>";
    }
        if($Page==$PageCount){
            echo "下一页 末页";
        }else
                echo "&nbsp;<a href='?page=".($Page+1)."'>上一页</a> ";
       echo "<a href='?page=". $PageCount ."'>末页</a>";
       echo "<br>共记录".$RecordCount."条记录&nbsp;";

       echo  $Page."/".$PageCount."页";
    ?>

</p>

















