<?php

class Car
{
    public $details = [];
    public $brand;
    public $model;
    public $year;

    function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;

        $this->add_carDetails($brand, $model, $year);
    }

    function get_carDetail()
    {
        return $this->details;
    }

    function add_carDetails($brand, $model, $year)
    {
        $this->details[] = array("Brand" => $brand,"Model" => $model,"Year" => $year);
    }
}

class Ford extends Car{
    public $carModels;
    public $demand;

    function __construct($brand, $model, $year, $carModels, $demand)
    {
        parent::__construct($brand, $model, $year);

        $this->carModels = $carModels;
        $this->demand = $demand;
    }

    function get_carDetail()
    {
        // Combine car details with Ford-specific details
        $fordDetails = parent::get_carDetail();
        $fordDetails[] = array('Model' => $this->carModels, 'Demand' => $this->demand);

        return $fordDetails;
    }
}

$ford = new Ford('Ford', 'Mustang', '1965', 'GT500', 'High');

$le_details = $ford->get_carDetail();

foreach($le_details as $key => $value){
    foreach($value as $key=> $value)
    {
        echo "$key - $value \n";
    }
}

?>