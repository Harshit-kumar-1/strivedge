<?php

trait say_hello
{
    public function sayHello()
    {
        echo "Hello Student <br/>";
    }
}

class Student
{
    public function say_name()
    {
        $student = "Eren";
        echo "Srudent Name is :" . $student ;
    }
}
class Base extends Student
{
    use say_hello;

    public function __construct()
    {
    }
}



$base = new Base();
$base->sayHello();
$base->say_name();

?>