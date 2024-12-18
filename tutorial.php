<!DOCTYPE html>
<html>
<body>

<?php
/* Home */
// echo "My first PHP script";

/* Install */
// $txt = "PHP";
// echo "I love $txt!";
// echo phpversion();

/* Syntax */
// echo "Hello World!<br>";
// // Not case sensitive for keywords
// Echo "Hello World!<br>";
// echo "Hello World!<br>";
// EcHo "Hello World!<br>";
// // Case sensitive for variable
// $color = "red";
// echo "My car is " . $color . "<br>";
// echo "My house is " . $COLOR . "<br>";
// echo "My boat is " . $coLOR . "<br>";

/* Comments */
// This is single-line comment
# This is also a single-line comment
/* This is a
multi-line comment */
// $x = 5 /* + 15 */ + 5;
// echo $x;

/* Variables */
// $x = 5;
// $y = "John";

// $txt = "W3Schools.com";
// echo "I love $txt!<br>";
// echo "I love " . $txt . "!<br>";

// $x = 5;
// $y = 4;
// echo $x + $y;

// Get type
// var_dump(5);
// var_dump("John");
// var_dump(3.14);
// var_dump(true);
// var_dump([2, 3, 56]);
// var_dump(NULL);

// $x = $y = $z = "Fruit";
// echo $y;

// Global scope
// $x = 5;

// function myTest() {
//     echo "<p>Variable x inside function is: $x</p>"; // error
// }
// myTest();
// echo "<p>Variable x outside function is: $x</p>";

// Local scope
// function myTest() {
//     $x = 5;
//     echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();
// echo "<p>Variable x outside function is: $x</p>"; // error

// Golbal
// $x = 5;
// $y = 10;

// function myTest() {
//     global $x, $y;
//     $y = $x + $y;
// }

// function myTest() {
//     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// myTest();
// echo $y;

// Static
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();


?>

</body>
</html>