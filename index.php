<?php
//interface fules{
//    public function nozy($parm);
//    public function notf($parm);
//}
//
//
//class man implements fules{
//    public $name;
//    public $demo1;
//    public $demo2;
//    public function __construct($name){
//        return $this->name=$name;
//    }
//    public function nozy($parm){
//        return $this->demo1=$parm;
//    }
//    public function notf($parm)
//    {
//        return $this->demo2=$parm;
//    }
//    public function sendmsg(){
//        return '你好我是'.$this->name.'notf:'.$this->demo2.'nozy:'.$this->demo1;
//    }
//}
//
//
//$man=new man('夏宇航');
//$man->notf('我是demo1');
//$man->nozy('我是demo2');
//echo $man->sendmsg()


namespace one{
    $name='你好世界';
    const wins='明天干什么去';
    function demo1(){
        return '我是函数1';
    }
}


namespace two\one{
    $name='我是2name';
    echo \one\wins;
    echo \one\demo1();
    use two\one As qin;
    qin\name;
}





?>