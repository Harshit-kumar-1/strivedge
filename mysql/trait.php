<?php
/*
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
        $student = "Eren Yoger";
        echo "Student Name is : " . $student;
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


trait
*/


/*
 * singleton
 * 
 


 class User{
    private static $instance = null;

    public static function getInstance(){
        if (self::$instance == null) {
            self::$instance = new self();
            echo 'Succesffuly created a object <br/>';
        }
        echo 'Nothing Heppened <br/>';
        return self::$instance;
    }

    public function __construct()
    {
        echo 'constructor Run <br/>';
    }

}

$user1 = User::getInstance();
$user2 = User::getInstance(); //not echo succesfully part direct echo nothing happened
$user2 = User::getInstance(); //not echo succesfully part direct echo nothing happened

*/

/**
 * trait with singleton
 * 
 */

trait Singleton
{

    public static function get_instance()
    {
        static $instance = [];

        $called_class = get_called_class();

        if (!isset($instance[$called_class])) {

            echo 'Hello!, I am Singleton <br/>';
            $instance[$called_class] = new $called_class();

        }

        return $instance[$called_class];

    }

}

class used
{

    public function say_hello()
    {
        echo 'Hello!, I am used. <br/>';
    }

}

class User extends used
{

    use Singleton;

    public function __construct()
    {
        echo 'Hello!, I am User which called say_hello() <br/>';
    }

}

echo '<h1>See we create three object but singleton only give all of them refrence of first object </h1>';

$user_one = User::get_instance();
$user_one->say_hello();
$user_two = User::get_instance();
$user_two->say_hello();
$user_three = User::get_instance();
$user_three->say_hello();
?>