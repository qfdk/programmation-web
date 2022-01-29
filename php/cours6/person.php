<?php
class Person
{
    protected $name;
    protected $sex;

    public function __construct($name = "aaaa", $sex = "男")
    {
        echo "2.Person __construct\n";
        $this->name = $name;
        echo "Person 中的name：" . $name . "\n";;
        $this->sex = $sex;
        echo "3.Person 建立了\n";
    }

    public function say()
    {
        echo "方言\n";
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }
}

// $p = new Person();

// $p->setSex("test");
// $p->abc = "abc";

// echo $p->getSex();
// echo $p->abc;

//声明学生类，使用extends继承Person类
class Student extends Person
{
    private $school;

    //构造方法重写（覆盖）
    public function __construct($name = "", $sex = "男", $school = "")
    {
        echo "1.Student __construct\n";
        //调用父类构造方法，初始化父类
        parent::__construct($name, $sex);
        $this->school = $school;                  //新添加一条为子类中新声明的成员属性赋初值
        echo "4.Student 中的name：" . $this->name . "\n";
        // $this->name = "不知道";
        echo "5.Student 53行后的name：" . $this->name . "\n";
        echo "6.Student 建立了\n";
    }


    public function getName()
    {
        return $this->name;
    }

    //方法重写（覆盖）
    public function say()
    {
        //调用父类中被本方法覆盖掉的方法
        parent::say();
        echo "普通话\n";    //在原有的功能基础上多加一点功能
    }
}

$student = new Student("张三", "男", 20, "edu");  //创建学生对象，并多传一个学校名称参数
$student->say();
