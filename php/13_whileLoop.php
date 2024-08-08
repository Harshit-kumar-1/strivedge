
<pre>



<?php 


$number = $temp = 5;
$fact = 1;

while($temp > 0){
    $fact = $fact * $temp;
    $temp--;
}

echo "Factorial of $number is  $fact";
echo "<br/>";
echo "<br/>";




$n = 5;
$row = 1;


while($row<= $n){

    $spaces = $n-$row;

    $spaceCount = 0;

    while($spaceCount< $spaces){
        echo " ";
        $spaceCount++;
    }

    $stars = 2 * $row - 1;
    $starsCount = 0;
    
    while($starsCount< $stars){
        echo "*";
        $starsCount++;
    }

    echo "<br/>";
    $row++;

}


$n = 5;
$row = 1;

while($row <= $n ){
    
    $space = $row - 1;
    $spaceCounter = 0;

    while($spaceCounter < $space){
        echo " ";
        $spaceCounter++;
    }

    $stars = 2 * ($n - $row) +1;
    $starsCount = 0;

    while($starsCount< $stars){
        echo "*";
        $starsCount++;
    }

    echo "<br/>";
    $row++;

}

$n = 5;
$col = 1;


while( $col <= $n ){
    $space = $n - $col;
    $spaceCount = 0;

    while($spaceCount < $space){
        echo " ";
        $spaceCount++;
    }
    
    $star = $col - 1;
    $starCount = 0;            

    while($starCount<= $star){
        echo "*";
        $starCount++;
    }

    $col++;
    echo "<br/>";

}


$n = 5;
$col = $n;


while( $col >= 1 ){
    
    $space = $n - $col;
    $spaceCount = 0;

    while($spaceCount < $space){
        echo " ";
        $spaceCount++;
    }
    
    $star = $col;
    $starCount = 0;            

    while($starCount< $star){
        echo "*";
        $starCount++;
    }

    $col--;
    echo "<br/>";

}








?>


</pre>
