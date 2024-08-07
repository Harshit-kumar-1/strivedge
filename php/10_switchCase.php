<?php

// provide today's  day automaticaly.
// $day = date('l');

// Manually
$day = "Monday";


switch( $day ) {

    case "Monday": 
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    case "Saturday":
        echo "Today is Saturday";
        break;
    case "Sunday":
        echo "Today is Sunday";
        break;
    default:
        echo "Please put correct Day";
        break;

}





?>