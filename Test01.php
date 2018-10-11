<?php
header("Content-Type:text/html;charset=UTF-8");
/**
 * Created by PhpStorm.
 * User: zeng
 * Date: 2018/10/11
 * Time: 14:19
 */
interface IGood {             //商品信息
    public function id();
    public function name();
    public function price();
}
interface ICart{
    public function check($good);    //检查商品数目
    public function remove($good, $quantity);   //移除
    public function put($good, $quantity);    //放入
    public function clear();   //清空
    public function checkOut();   //结账
}
class Cart implements ICart {    //购物车
    private $goods;
    public function __construct() {
        $this->goods = array();          //声明数组array()
    }
    public function check($good) {       //检查商品数目
        $id = $good->id();      //调用函数 id()
        if (isset($this->goods[$id])) {      //isset()  检查变量是否被设置
            $item = $this->goods[$id];
            $quantity = $item[1];
            return $quantity;
        } else {
        //    echo "您是第一次购买此商品:".$good->name().'<br>';
            return 0;
        }
    }
    public function put($good, $quantity) {    //放入
        $id = $good->id();
        $num = $this->check($good);
        $num += $quantity;
        $item = array($good, $num);     //商品对象和数目
        $this->goods[$id] = $item;
        return  '成功将'.$good->name().'放入购物车,数目是'.$num;
    }
    public function remove($good, $quantity) {   //移除
        $id = $good->id();
        $num = $this->check($good);        //
        if ($quantity <= $num) {
            $num = $num - $quantity;
            $this->goods[$id] = array($good, $num);
        } else {
            $num = 0;
            unset($this->goods[$id]);
        }
        return '成功移除'.$good->name().'商品,移除的数目是：'.$quantity.', 剩余'.$num;
    }
    public function clear() {   //	清空
        $this->goods = array();
    }
    public function checkOut() {     //结账
        $price = 0;
        foreach ($this->goods as $id => $item) {
            $good = $item[0];       //第一个元素 商品的对象
            $quantity = $item[1];        //数量
            $price += $good->price() * $quantity;
        }
        return '您的消费是：'.$price;
    }
}

class Good implements  IGood {
    private $id;
    private $name;
    private $price;
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function id() {
        return $this->id;
    }
    public function name() {
        return $this->name;
    }
    public function price() {
        return $this->price;
    }
}
$mycart = new Cart();    //实例化购物车
$good1 = new Good("9787121093821", "PHP实用教程", 35);     //商品
$good2 = new Good("6907992502052", "伊利纯牛奶", 3.5);
$good3 = new Good("6921611524867", "康佳LC42MS96PD液晶电视", 5498);
$x=$mycart->put($good1, 1);
$y=$mycart->put($good3, 1);
$z=$mycart->put($good2, 24);
$jiage1=$mycart->checkOut();
$a=$mycart->remove($good2,2);
$jiage=$mycart->checkOut();
echo $x;
echo '<br>';
echo $y;
echo '<br>';
echo $z;
echo '<br>';
echo $jiage1;
echo '<br>';
echo $a;
echo '<br>';

echo $jiage;            //计算价格
echo '<br>';
echo "123";


