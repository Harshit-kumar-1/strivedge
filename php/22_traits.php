<?php 

trait UsingTrait {
    public function msgByTrait($msg) {
        return "You are $msg.";
    }
}

class One{

    use UsingTrait;
    function __construct($msg) {
        echo $this->msgByTrait($msg);
    }
}


class Two{

    use UsingTrait;
    function __construct($msg) {
        echo $this->msgByTrait($msg);
    }
}

$one = new One("Awesome!!");
echo "\n";

$two = new Two("Fantastic");//fabulous
echo "\n";



// real example 

trait HasName{
    private $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

trait HasUserName{
    private $name;
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

trait HasEmail{
    private $email;
    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
}


class User{
    /**
     * 
     * we declaire 3 triats in HasName and HasUserName have same mehods so it will create a naming conflict.
     * 
     * and program will be confuse which method i call and give a error if we use below phase 1
     * 1 use HasEmail,HasName, HasUserName;
     * 
     * PHP Fatal error:  Trait method HasUserName::setName has not been applied as User::setName, because of collision with HasName::setName in /opt/lampp/htdocs/php/22_traits.php on line 71
     * 
     * but now we have solution we can tell compiler you can use (HasName) method insteadof (HasUserName) method using
     * 
     * "insteadof" keyword and also tell them if (HasUserName) method have to call you can call it as (getUserName) method
     * like this 
     * 
     * use HasEmail,HasName, HasUserName{    
     *     HasName::getName insteadof HasUserName;
     *     HasUserName::getName as getUserName;
     *     HasName::setName insteadof HasUserName;
     *     HasUserName::setName as setUserName;
     * }
     * 
     */
    
    // use HasEmail,HasName, HasUserName;

    use HasEmail,HasName, HasUserName{    
        HasName::getName insteadof HasUserName;
        HasUserName::getName as getUserName;
        HasName::setName insteadof HasUserName;
        HasUserName::setName as setUserName;
    }
    public function getDetails() {
        echo "The user ". $this->getName(). " has Username ".$this->getUserName()."  and Email ".$this->getEmail();
    }

}


$user = new User();

$user->setName("Harshit");
$user->setUserName("Harshit");
$user->setEmail("Harshit@gmail.com");

$user->getDetails();




echo "\n";
?>