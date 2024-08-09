<?php 

require 'related25/src/myclass.php';
require 'related25/src/another.php';
require 'related25/utilities/utility.php';
require 'related25/utilities/defaultFunction.php';


use Src\Myclass;
use Src\Another;
use Related25\Utilities as utils;
// use utils\Utility;
use Related25\Utilities\Utility;

$myclass = new Myclass();
$myclass->greet();


$another = new Another();
$another->greet();

$utility = new Utility();
$utility->greet();

utils\defaultFunction();

?>