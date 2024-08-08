<pre style="background-color:whitesmoke;text-align:center;">
    <?php session_start();?>
<?php

if (!isset($_SESSION["randNumber"])) {
    $_SESSION['randNumber'] = rand(1, 10);
}

$randNumber = $_SESSION['randNumber'];
$message = "Hello";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = intval($_POST['num1']);  // Ensure the input is an integer

    // echo "Random Number: $randNumber<br/>";
    // echo "Your Number: $number<br/>";

    if ($number == $randNumber) {
        $message = "You win !!";
        unset($_SESSION["randNumber"]);
    } elseif ($number > 0 && $number <= 10) {
        if ($number < $randNumber) {
            $message = "Guess a greater number";
            // echo "Keep Trying";
        } elseif ($number > $randNumber) {
            $message = "Guess a lower number";
            // echo "Keep Trying";
        }
    } else {
        $message = "Make sure the number is between 1 to 10";
    }
} else {
    $message = "Please submit the form.";
}

echo   "<br/>";
echo   "<br/>";
echo   "<br/>";
echo   "<br/>";
echo   "<br/>";



if($_SERVER['REQUEST_METHOD'] == "GET"){


    $number = intval($_GET['num2']);
    $fact = 1;
    
    while($number > 0){
        $fact = $fact * $number;
        $number--;
    }
   
    $message2 = "Factorial of $number is  $fact";

    
}


if (!isset($_SESSION['inputs'])) {
    $_SESSION['inputs'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['num3'])) {
    $input = $_GET['num3'];
    // echo $input;
    if ($input == 'stop') {
        // echo "Total Sum: " . $_SESSION['inputs'];
        $message3 = $_SESSION['inputs'];
        unset($_SESSION['inputs']);
    } else {
        // Ensure the input is a valid number before adding
        $input = intval($input);
        $_SESSION['inputs'] += $input;
        $input_session = $_SESSION['inputs'];
        // echo "Current Sum: " . $input_session;
    }
}

?>

<h2> Guess a Number</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="mb-3">
        <label for="num1" class="form-label">Number Between 1 to 10</label>
        <input type="number" class="form-control" id="num1" name="num1" placeholder="write a number" Required>
        <p><?php echo $message; ?></p>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>


<h2> Find Factorial a Number</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <div class="mb-3">
        <label for="num2" class="form-label">Factorial</label>
        <input type="number" class="form-control" id="num2" name="num2" placeholder="write a number" Required>

        <p><?php echo $message2;?></p>
       
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>



<h2> Fill inputs</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <div class="mb-3">
        <label for="num3" class="form-label">Fill inputs for sum</label>
        <input type="text" class="form-control" id="num3" name="num3" placeholder="write text or number" Required>
        <p>you want to result write "stop" and submit</p>
        <p><?php echo $message3 ?? 'input sum shows here';?></p>
       
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>



</pre>