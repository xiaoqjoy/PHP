<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/12
 * Time: 15:24
 */
include 'a.php';


class Site {
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}

$php = new Site;
$taobao = new Site;
$google = new Site;

// 调用成员函数，设置标题和URL
$php->setTitle( "php中文网" );
$taobao->setTitle( "淘宝" );
$google->setTitle( "Google 搜索" );

$php->setUrl( 'www.php.cn' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// 调用成员函数，获取标题和URL
$php->getTitle();
echo "<br>";
$taobao->getTitle();
echo "<br>";
$google->getTitle();
echo "<br>";
$php->getUrl();
echo "<br>";
$taobao->getUrl();
echo "<br>";
$google->getUrl();
echo "<br>";


/*在PHP里面->和=>完全不同的，->用来引用对象的成员（属性与方法），=>只用来数组赋值*/

$arr = ['a'=>123,'b'=>456];//数组初始化

echo $arr['a'];//数组引用
echo "<br>";
print_r($arr);//查看数组
echo "<br>";
class A{

    public $a=123;

    public $b=456;

    public function say(){
        echo $this -> a;
    }

}

$obj = new A();

$obj -> say();
echo "<br>";
echo $obj -> a;//对象引用
echo "<br>";
print_r($obj);//查看对象

?>