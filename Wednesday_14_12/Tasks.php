<?php
echo "<h2>String</h2>";
echo "----------------------------";
echo "<br>";
echo strtoupper ("hello coach ala'");
echo "<br>";
echo strtolower ("HELLO COACH ALA'");
echo "<br>";
echo ucwords ("hello coach ala'");
echo "<br>";
echo ucfirst ("hello coach ala'");
echo "<br>";
echo "----------------------------";
echo "<br>";
$str1= '085119'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
echo "<br>";
echo "----------------------------";
echo "<br>";
$word = "Orange";
$mystring = "I am a full stack developer at orange coding academy";
if(stripos($mystring, $word) !== false){
  echo "Word Found!";
} else{
  echo "Word Not Found!";
}
echo "<br>";
echo "----------------------------";
echo "<br>";
// var_dump(stripos($mystring, $word));
// echo "<br>";
// echo strpos($mystring, $word)
$path = "http://localhost/php_tasks/Wednesday_14_12/Tasks.php";

$file1 = basename($path);
$file2 = basename($path, ".php");

// Show filename with file extension
echo $file1 . "\n";
echo "<br>";

// Show filename without file extension
echo $file2;
echo "<br>";
echo "----------------------------";
echo "<br>";
$email  = 'info@orange.com';
$user = strstr($email, '@', true);
echo $user;
echo "<br>";
echo "----------------------------";
echo "<br>";
$str1 = 'info@orange.com';
echo substr($str1, -3);
echo "<br>";
echo "----------------------------";
echo "<br>";
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
echo password_generate(7);
echo "<br>";
echo "----------------------------";
echo "<br>";
$str = 'That new trainee is so genius.';
echo preg_replace('/That/', 'the', $str, 1);
echo "<br>";
echo "----------------------------";
echo "<br>";
$str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
echo "<br>";
echo "----------------------------";
echo "<br>";
$d = array("Twinkle", "twinkle", "little star");
echo "<pre>";
echo var_dump($d);
echo "</pre>";
echo "----------------------------";
echo "<br>";
echo "<h2>Functions</h2>";

























?>