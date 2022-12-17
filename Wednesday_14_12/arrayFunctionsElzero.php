<?php
echo ("One line
        Another line");
echo "<br>-------------<br>";
echo nl2br("One line 
           Another line");
echo "<br><br>############<br>";
//rtrim: Remove characters from the right side of a string:
$str = "Hello walaa World!";
echo $str . "<br>";
echo rtrim($str,"World!");
echo "<br><br>############<br>";
//ltrim: Remove characters from the left side of a string:
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello ");
echo "<br><br>############<br>";
// similar_text: Calculate the similarity between two strings and return the matching characters:
echo similar_text("Hello World","Hello Peter") . "<br>";
echo similar_text("Walaa Huda","Haneen Nur");
// str_pad: Pad to the right side of the string, to a new length of 20 characters:
echo "<br>############<br>";
$str = "Hello World";
echo str_pad($str,21," Oday");
// str_repeat: Repeat the string "Walaa" 13 times:
echo "<br>############<br>";
echo str_repeat("Walaa",13) . "<br>";
echo str_repeat("Oday ",13);

echo "<br>############<br>";
"<p>Search the string 'Hello World!', find the value 'world' and replace it with 'Peter':</p>";
echo str_replace("world","Peter","Hello peter!") . "<br>";
// echo str_replace("value","Walaa", "find the Walaa") . "<br>";
echo "############<br>";

  /*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
  */

  echo strstr("Elzero Web", "W") . "<br>"; // Web
  echo strstr("Elzero Web", "z") . "<br>"; // zero Web
  echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
  echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7

  echo "--------------------";

  echo strstr("Elzero Web", "w") . "<br>"; // False
  var_dump(strstr("Elzero Web", "w"));
  echo '<br>';
  echo "--------------------";
  echo '<br>';


  echo stristr("Elzero Web", "w") . "<br>"; // Web
  var_dump(stristr("Elzero Web", "w")); // Web
  echo '<br>';

  echo '<br>';
  echo "--------------------";
  echo '<br>'; 

  echo 10_000_000;
  echo '<br>';

  echo '<br>';
  echo "--------------------";
  echo '<br>';

  echo number_format(10000000.156023);
  echo '<br>';
  echo number_format(10000000.156023, 3);
  echo '<br>';
  echo number_format(10000000.156023, 3, "@");
  echo '<br>';
  echo number_format(10000000.156023, 3, "@", "#");
 ?>