<?php



class A{
    public static function welcome(){
        echo "Welcome to Static Method. I have many benifits. i call directly without creating object using classname::Methodname \n";
    }
}

A::welcome();


class ayoo {
    public static function yoo(){
        echo "Hello, I am static method yoo() \n";
    }
}

class bfoo {
    public static function foo(){
        ayoo::yoo();
        echo "Hello yoo, I am foo() \n";
    }
}


class Father{

    public $webName;
    function __construct($webName){
        // self::getWebName($webName);

    }
    public static function getWebName($webName){
        // echo "Web Name is $webName. \n";
        return "Web Name is $webName.\n";
    }
}


class Child extends Father{

    public function __construct($webName){
        $msg = parent::getWebName($webName);
        echo $msg . "This msg called by child class using parent::getWebName() \n";
    }

}

// $father = new father("My web site");

$child = new Child("My web site");


?>
