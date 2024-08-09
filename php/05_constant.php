<prep>

    <?php

    echo "<h1>PHP Constant</h1>";
    echo "<p>Two type of constant define and const</p>";
    echo '<br/>';

    // Can't cahnge value and global
    

    define("PI", "3.14", false);

    // echo pi; print nothing and break the code
    echo PI;

    echo '<br/>';

    const pi = 3.14159;

    echo pi;

    echo '<br/>';

    echo pi();  // Math function
    



    echo "<h1>PHP Magic Constant";
    echo '<br/>';
    echo "9 types of magic constant";
    echo '<br/>';
    echo "__CLASS__ , __DIR__ , __FILE__, __FUNCTION__ , __LINE__ , __METHOD__ , __NAMESPACE__ , __TRAIT__, ClassName::class";
    echo '<br/>';


    // Change value accordingly where they use
    
    echo __DIR__; // print directory path
    
    echo '<br/>';

    // give same output as above 
    const path = __DIR__;

    echo path;
    echo '<br/>';


    // return file name long with path
    const file = __FILE__;
    echo file;

    echo '<br/>';

    function FunctionName()
    {

        //return function name if inside a function 
        $funName = __FUNCTION__;

        return "$funName Greetings ! hello";
    }

    $call = FunctionName();
    echo $call;


    echo '<br/>';

    //nothing print bcz not a inside function
    $funName = __FUNCTION__;
    echo $funName . 'Function name';

    echo '<br/>';


    // return Line Number 
    echo "using __LINE__   number is " . __LINE__;



    ?>




</prep>