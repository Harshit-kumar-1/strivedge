<?php

interface Animal
{

    public function makeSound();
    public function typeOfAnimal();
}


class Dog implements Animal
{


    public function makeSound()
    {
        return "Dogs sounds Bark. \n";
    }

    public function typeOfAnimal()
    {
        return "Dog is a domesticated descendant of the wolf.\n";
    }

}

class Cat implements Animal
{

    public function makeSound()
    {
        return "Cat sounds Meow. \n";
    }
    public function typeOfAnimal()
    {
        return "Cat is a small domesticated carnivorous mammal.\n";
    }
}


$cat = new Cat();
$dog = new Dog();

$animals = array($cat, $dog);

foreach ($animals as $animal) {
    echo $animal->makeSound();
    echo $animal->typeOfAnimal();
}




interface Human
{
    public function gender();
}

class Male
{
    public function male($name)
    {
        return "$name is a male.";
    }
}

class Female
{
    public function female($name)
    {
        return "$name is a female.";
    }
}

class Rohan extends Male implements Human
{
    public function gender()
    {
        return $this->male(__CLASS__) . "\n";
        // return  __CLASS__." is a male";
    }
}

class Lisa extends Female implements Human
{
    public function gender()
    {
        return $this->female(__CLASS__) . "\n";
        // return  __CLASS__." is a female";
    }
}

class Ram implements Human
{
    public function gender()
    {
        return __CLASS__ . " is a male. \n";
    }
}

$rohan = new Rohan();
$lisa = new Lisa();
$ram = new Ram();

$humans = [$rohan, $lisa, $ram];
foreach ($humans as $human) {
    echo $human->gender();
}

echo "By using foreach loop : \n";


// simple way
$humans = ['rohan' => 'male', 'lisa' => 'female', 'ram' => 'male', 'harshit' => 'male', 'amisha' => 'female', 'arjun' => 'male', 'neha' => 'female', 'bhupsa' => 'male'];
ksort($humans);

foreach ($humans as $name => $gender) {
    echo ucfirst($name) . " is a $gender \n";
}

echo "\n";


?>