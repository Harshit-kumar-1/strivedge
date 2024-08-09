<?php 

class Count {

    public static $statiCount = 0;
    public $count = 0;

    public function count() {
        self::$statiCount++;
        $this->count++;
        echo "static variable value ".self::$statiCount." and global variable value ".$this->count. "\n";
    }

}

$obj = new Count();
$obj2 = new Count();
$obj3 = new Count();
$obj4 = new Count();
$obj5 = new Count();
$obj6 = new Count();
$obj7 = new Count();
$obj8 = new Count();
$obj9 = new Count();
$obj10 = new Count();

$objects = array($obj, $obj2, $obj3, $obj4, $obj5, $obj6, $obj7, $obj8, $obj9, $obj10);

foreach($objects as $obj){
    $obj->count();
}



?>