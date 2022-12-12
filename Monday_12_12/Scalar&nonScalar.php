<!DOCTYPE html>
<html>
<body>
<!-- 
Scalar variables are those containing an integer, float, string or boolean.
Types array, object, and NULL are not scalar.
 -->

<!-- 
 Scalar variables:
 1- integer 
 2- float/double
 3- string 
 4- boolean 

 not-scalar: 
 1- array 
 2- object 
 3- NULL 
 -->



<?php
$a = "Hello"; // a is string
echo "a is " . is_scalar($a) . "<br>";
// var_dump (is_scalar($a)) ;
echo  "<br>";
echo "######################## <br>";

$b = 0; // b is integer 
echo "b is " . is_scalar($b) . "<br>";
// var_dump (is_scalar($b)) ;
echo  "<br>";
echo "######################## <br>";


$c = 32; // c is integer
echo "c is " . is_scalar($c) . "<br>";
// var_dump (is_scalar($c)) ;
echo  "<br>";
echo "######################## <br>";

$d = NULL; // d is NULL
echo "d is " . is_scalar($d) . "<br>";
// var_dump (is_scalar($d)) ;
echo  "<br>";
echo "######################## <br>";

$e = array("red", "green", "blue"); // e is array
echo "e is " . is_scalar($e) . "<br>";
// var_dump (is_scalar($e)) ;
echo  "<br>";
echo "######################## <br>";

$f = TRUE; // f is boolean
echo "f is " . is_scalar($f) . "<br>";
// var_dump (is_scalar($f)) ;
echo  "<br>";
echo "######################## <br>";

$g = 13.5 ; // g is float/double 
echo "g is " . is_scalar($g) . "<br>";
// var_dump (is_scalar($g)) ;
echo  "<br>";
echo "######################## <br>";

?>

</body>
</html>