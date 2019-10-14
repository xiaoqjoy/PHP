类，是你的 class{} 代码片段
对象，是类实例化(new)之后得到的。 $对象 = new 类();
对象,是基础数据类型中的 object



类继承
子类继承父类的方法和属性，来强化自己。

基本语法

class a{
    function get(){
        echo 'a';
    }
}

class b extends a{
    function get2(){
        echo 'b';
    }
}

$obj = new b();

//正确，b 继承了 父类 a 的方法。
$obj->get();
子类 extends 父类 （继承语法）
可见性为 private 的方法，不能继承
父子类同名的方法、属性，优先调用子类
子类可通过 parent::方法() 来调用父类方法，包括构造函数



composer   php管理依赖关系的


配置本地路由表
C:\Windows\System32\drivers\etc




