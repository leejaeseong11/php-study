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
// function myTest() {
//     static $x = 0;
//     echo $x;
//     $x++;
// }

// myTest();
// myTest();
// myTest();

/* Echo / Print */
// echo "Hello<br>";
// echo("Hello");

// echo "<h2>PHP is Fun!</h2>";
// echo "Hello world!<br>";
// echo "I'm about to learn PHP!<br>";
// echo "This ", "String ", "was ", "made ", "with multiple paremters.";

// $txt1 = "Learn PHP";
// $txt2 = "W3Schools.com";
// echo "<h2>$txt1</h2>";
// echo "<p>Study PHP at $txt2</p>";

// echo '<h2>' . $txt1 . '</h2>';
// echo '<p>Study PHP at ' . $txt2 . '</p>';

// print "Hello<br>";
// print("Hello<br>");

// print "<h2>PHP is Fun!</h2>";
// print "Hello world!<br>";
// print "I'm about to learn PHP!<br>";

// print "<h2>$txt1</h2>";
// print "<p>Study PHP at $txt2</p>";

// print '<h2>' . $txt1 . '</h2>';
// print '<p>Study PHP at ' . $txt2 . '</p>';

/* Data Types */
// $x = 5;
// var_dump($x);

// $x = "Hello world!";
// $y = 'Hello world!';
// var_dump($x);
// echo "<br>";
// var_dump($y);

// $x = 5985;
// $x = 10.365;
// $x = true;
// var_dump($x);
// $cars = array("Volvo", "BMW", "Toyota");
// var_dump($cars);

// class Car {
//     public $color;
//     public $model;
//     public function __construct($color, $model) {
//         $this->color = $color;
//         $this->model = $model;
//     }
//     public function message() {
//         return "My car is a " . $this->color . " " . $this->model . "!";
//     }
// }
// $myCar = new Car("red", "Volvo");
// var_dump($myCar);
// echo $myCar->message();

// $x = "Hello world!";
// $x = null;
// var_dump($x);

// $x = 5;
// var_dump($x);
// $x = "Hello";
// var_dump($x);

// $x = 5;
// $x = (string) $x = 5;
// var_dump($x);

/* Strings */
// echo "Hello<br>";
// echo 'Hello<br>';

// $x = "John";
// echo "Hello $x<br>";
// echo 'Hello $x<br>';

// echo strlen("Hello world!");
// echo "<br>";
// echo str_word_count("Hello world!");
// echo "<br>";
// echo strpos("Hello world!", "world");

// $x = "Hello World!";
// echo strtoupper($x);
// echo "<br>";
// echo strtolower($x);
// echo "<br>";
// echo str_replace("World", "Dolly", $x);
// echo "<br>";
// echo strrev($x);

// echo "<br>";
// $x = " Hello World! ";
// echo "<input value='" . trim($x) . "' />";
// echo "<br>";

// $y = explode(" ", $x);
// print_r($y);

// $x = "Hello";
// $y = "World";
// $z = $x . $y;
// echo $z;
// echo "<br>";
// $z = $x . " " . $y;
// echo $z;
// echo "<br>";

// $x = "Hello";
// $y = "World";
// $z = "$x $y";
// echo $z;

// $x = "Hello World!";
// echo substr($x, 6, 5);
// echo "<br>";
// echo substr($x, 6);
// echo "<br>";
// echo substr($x, -5, 3);
// echo "<br>";
// $x = "Hi, how are you?";
// echo substr($x, 5, -3);

// $x = "We are the so-called \"Vikings\" from the north.";
// echo $x;

/* Numbers */
// $a = 5;
// $b = 5.34;
// $c = "25";
// var_dump($a);
// var_dump($b);
// var_dump($c);

// $x = 5985;
// var_dump(is_int($x));
// $x = 59.85;
// var_dump(is_int($x));
// $X = 10.365;
// var_dump(is_float($x));

// $x = 1.9e4111;
// var_dump($x);
// $x = acos(8);
// var_dump($x);

// $x = 5985;
// var_dump(is_numeric($x));
// $x = "5985";
// var_dump(is_numeric($x));
// $x = "59.85" + 100;
// var_dump(is_numeric($x));
// $x = "Hello";
// var_dump(is_numeric($x));

// // cast float to int
// $x = 23465.768;
// $int_cast = (int) $x;
// echo $int_cast;

// echo "<br>";

// // cast string to int
// $x = "23465.768";
// $int_cast = (int)$x;
// echo $int_cast;

/* Casting */
// $a = 5;
// $b = 5.34;
// $c = "hello";
// $d = true;
// $e = NULL;
// $a = (string) $a;
// $b = (string) $b;
// $c = (string) $c;
// $d = (string) $d;
// $e = (string) $e;
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);

// $a = 5;
// $b = 5.34;
// $c = "25 kilometers";
// $d = "kilometers 25";
// $e = "hello";
// $f = true;
// $g = NULL;
// $a = (int) $a; // 5
// $b = (int) $b; // 5
// $c = (int) $c; // 25
// $d = (int) $d; // 0
// $e = (int) $e; // 0
// $f = (int) $f; // 1
// $g = (int) $g; // 0

// $a = 5;
// $b = 5.34;
// $c = "25 kilometers";
// $d = "kilometers 25";
// $e = "hello";
// $f = true;
// $g = NULL;
// $a = (float) $a; // 5
// $b = (float) $b; // 5.34
// $c = (float) $c; // 25
// $d = (float) $d; // 0
// $e = (float) $e; // 0
// $f = (float) $f; // 1
// $g = (float) $g; // 0

// $a = 5;
// $b = 5.34;
// $c = 0;
// $d = -1;
// $e = 0.1;
// $f = "hello";
// $g = "";
// $h = true;
// $i = NULL;
// $a = (bool) $a; // true
// $b = (bool) $b; // true
// $c = (bool) $c; // false
// $d = (bool) $d; // true
// $e = (bool) $e; // true
// $f = (bool) $f; // true
// $g = (bool) $g; // false
// $h = (bool) $h; // true
// $i = (bool) $i; // false

// $a = 5;
// $b = 5.34;
// $c = "hello";
// $d = true;
// $e = NULL;
// $a = (array) $a; // array(1) { [0]=> int(5) }
// $b = (array) $b; // array(1) { [0]=> float(5.34) }
// $c = (array) $c; // array(1) { [0]=> string(5) "hello" }
// $d = (array) $d; // array(1) { [0]=> bool(true) }
// $e = (array) $e; // array(0) { }

// class Car {
//     public $color;
//     public $model;
//     public function __construct($color, $model) {
//         $this->color = $color;
//         $this->model = $model; 
//     }
//     public function message() {
//         return "My car is a " . $this->color . " " . $this->model . "!";
//     }
// }
// $myCar = new Car("red", "Volvo");
// $myCar = (array) $myCar;
// var_dump($myCar); // array(2) { ["color"]=> string(3) "red" ["model"]=> string(5) "Volvo" }

// $a = 5;
// $b = 5.34;
// $c = "hello";
// $d = true;
// $e = NULL;
// $a = (object) $a; // object(stdClass)#1 (1) { ["scalar"]=> int(5) }
// $b = (object) $b; // object(stdClass)#2 (1) { ["scalar"]=> float(5.34) }
// $c = (object) $c; // object(stdClass)#3 (1) { ["scalar"]=> string(5) "hello" }
// $d = (object) $d; // object(stdClass)#4 (1) { ["scalar"]=> bool(true) }
// $e = (object) $e; // object(stdClass)#5 (0) { }

// $a = array("Volvo", "BMW", "Toyota"); // indexed array
// $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array
// $a = (object) $a; // object(stdClass)#2 (3) { ["0"]=> string(5) "Volvo" ["1"]=> string(3) "BMW" ["2"]=> string(6) "Toyota" }
// $b = (object) $b; // object(stdClass)#1 (3) { ["Peter"]=> string(2) "35" ["Ben"]=> string(2) "37" ["Joe"]=> string(2) "43" }

// $a = 5;
// $b = 5.34;
// $c = "hello";
// $d = true;
// $e = NULL;
// // $a = (unset) $a; // deprecated
// $a = NULL;  
// $b = NULL;  
// $c = NULL; 
// $d = NULL;  
// $e = NULL;  

?>

</body>
</html>