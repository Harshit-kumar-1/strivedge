<?php

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * 
 * oops demonstration 
 * 
 * using some functions like trim(), and ucfirst();
 * 
 * 
 */


class Fruit
{
    public $name;
    public $color;

    function __construct($name = 'Banana', $color = 'Yellow')
    {
        $this->name = $name;
        $this->color = $color;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }


}

$fruit1 = new Fruit("Banana", "Yellow");
echo $fruit1->getColor();

echo "\n";



$Languages = [];

class Language
{
    public $name;
    public $syntex;
    public $type;
    public $used;


    function __construct($name, $syntex, $type, $used)
    {
        $this->name = $name;
        $this->syntex = $syntex;
        $this->type = $type;
        $this->used = $used;

        $this->addLanguage($name, $syntex, $type, $used);
    }

    function addLanguage($name, $syntex, $type, $used)
    {
        $langArray = [
            'name' => $name,
            'syntex' => $syntex,
            'type' => $type,
            'used' => $used,
        ];
        $GLOBALS['Languages'][] = $langArray;

        echo "if you want to add more press 1 -> ";
        $choice = fgets(STDIN);
        if ($choice == 1) {
            echo "please write language name => ";
            $name = ucfirst(trim(fgets(STDIN)));
            echo "please write language syntex like alphabet => ";
            $syntex = ucfirst(trim(fgets(STDIN)));
            echo "please write which type of language is this normal or programming => ";
            $type = ucfirst(trim(fgets(STDIN)));
            echo "please write where language scope is local or global => ";
            $used = ucfirst(trim(fgets(STDIN)));

            $this->addLanguage($name, $syntex, $type, $used);
        } else {
            $this->showLanguages();
            echo "program terminated \n";
        }
    }

    function showLanguages()
    {
        $languages = $GLOBALS['Languages'];
        foreach ($languages as $language) {
            foreach ($language as $key => $value) {
                echo "$key:  $value \t";
            }
            // print_r( $language['name'].' '.$language['syntex']. ' '. $language['type'].' '. $language['used']);
            echo "\n";
        }
    }
}

// $hindi = new Language("Hindi","हिन्दी","Indo-Aryan language","Global in India");
// $english = new Language("English","English","Indo-European language","Global in World");

// $php = new Language("PHP", "<?php ", 'Programming Language', "Backend");
// $java = new Language("Java", "public static void main(string,args){}", 'Programming Language', "Backend");


// $hindi->showLanguage();


// $eng = new Language();
// $eng->addLanguage("English","English","Indo_european","Global");
// 
// $eng->showLanguage();


$language = new Language("Hindi", "हिन्दी", "Normal", "Global in India");
// $language->showLanguages();



echo "\n";
?>