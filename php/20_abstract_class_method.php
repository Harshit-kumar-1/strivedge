<?php



abstract class Car
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro(): string;
}

class Audi extends Car
{
    public function intro(): string
    {
        return "I am $this->name made with German Quality.";
    }
}

class Volvo extends Car
{

    public function intro(): string
    {
        return "I am $this->name from swedish";
    }

}

class citreon extends Car
{

    public function intro(): string
    {
        return "I am $this->name franch vegance";
    }
}


// $car = new Car("audi");

print_r($car);

$audi = new Audi('Audi');
echo $audi->intro();
echo "\n";
// print_r($audi);

$volvo = new Volvo('Volvo');
echo $volvo->intro();

echo "\n";
// print_r($volvo);

$citreon = new Citreon('Citreon');
// print_r($citreon);
echo $citreon->intro();

echo "\n";



abstract class Vehicle
{
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    abstract public function startEngine();

    public function set_details($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_details()
    {
        return "Brand :  $this->brand Model :  $this->model 'Year : $this->year";
    }

}


class Scooter extends Vehicle
{

    public function startEngine()
    {
        return "$this->brand brand started engine of $this->model model in $this->year";
    }

}

class Motercycle extends Vehicle
{

    public function startEngine()
    {
        return "$this->brand brand started engine of $this->model model in $this->year";
    }

}

$scooter = new Scooter("Honda scooters", "Activa 6G", 2023);
// $scooter->set_details("Honda scooters","Activa 6G",2023);
// echo $scooter->get_details();
// echo "\n";
echo $scooter->startEngine();
echo "\n";


$motorcycle = new Motercycle("Hero Honda", "cd deluxe", 2005);
echo $motorcycle->startEngine();

echo "\n";

?>