<?php

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// global Arry
$directory = [];

function Main()
{
    do {
        echo "If you want to perform operations on directory press \n";
        echo "1 - Add member \n";
        echo "2 - Show member list \n";
        echo "3 - Delete member \n";
        echo "0 - Exit the operation \n";
        echo "Choose an option: ";
        $choice = trim(fgets(STDIN));

        switch ($choice) {
            case '1':
                echo "You want to add member press: 1 for add member or \n";
                echo "if you change your mind press 7 to back to Main. \n";
                $pre = trim(fgets(STDIN));
                if ($pre == '1') {
                    addMember();
                } elseif ($pre == '7') {
                    Main();
                } else {
                    echo "You entered a wrong query. Operation terminated.\n";
                }
                break;

            case '2':
                showMembers();
                break;

            case '3':
                removeMember();
                break;

            case '0':
                exitFunction();
                break;

            default:
                echo "You chose a wrong operation. Please try again.\n";
                break;
        }

    } while (!empty($choice));

}

function addMember()
{
    global $directory;
    echo "Welcome to Add Member Function \n";
    echo "Name of member: ";
    $name = trim(fgets(STDIN));

    echo "Number of member: ";
    $number = trim(fgets(STDIN));

    echo "Age of member: ";
    $age = trim(fgets(STDIN));
    echo "Address of member: ";
    $address = trim(fgets(STDIN)); // Trim remove newline charectors

    // associative array
    $member = [
        'name' => $name,
        'number' => $number,
        'age' => $age,
        'address' => $address
    ];

    $directory[] = $member; // Append to the global array
    // print_r($directory);
}

function removeMember()
{
    global $directory; // Access the global array

    if (empty($directory)) {
        echo "No members to remove.\n";
        return;
    }

    showMembers(); // Show members before deletion

    echo "Enter the index of the member you want to remove: ";
    $index = trim(fgets(STDIN));

    if (is_numeric($index) && isset($directory[$index - 1])) {
        unset($directory[$index - 1]);  
        $directory = array_values($directory); // Reindex the array
        echo "Member removed successfully.\n";
    } else {
        echo "Invalid index.\n";
    }
}

function showMembers()
{
    global $directory;

    if (empty($directory)) {
        echo "No members to show.\n";
        return;
    }

    echo "Member List:\n";
    foreach ($directory as $index => $member) {
        echo "Member " . ($index + 1) . ":\n";
        echo "Name: " . $member['name'] . "\n";
        echo "Number: " . $member['number'] . "\n";
        echo "Age: " . $member['age'] . "\n";
        echo "Address: " . $member['address'] . "\n";
        echo "------------------------\n";
    }
}

function exitFunction()
{
    exit("Terminating the Program.");
}



// calling main function
Main();

?>