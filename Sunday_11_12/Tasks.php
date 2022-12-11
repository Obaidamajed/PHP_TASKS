<?php 
echo phpversion();
echo "<br>";
echo "---------------------------------->";
echo "<br>";
?>


<?php
echo "<br>";
echo "Tommorrow i'll learn PHP global variables.";
echo "<br>";
echo "This is a bad command: del c:. ";
echo "<br>";
echo "---------------------------------->";
echo "<br>";
?>


<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
echo "---------------------------------->";
?>
</body>
</html>


<?php
echo "<br>";
echo "<br>";
echo 'User IP Address - '. $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "---------------------------------->";
echo "<br>";
echo "<br>";
?>

<?php
$currentPage= $_SERVER['SCRIPT_NAME'];
echo $currentPage;
echo "<br>";
echo "---------------------------------->";
?>
<?php
echo "<br>";
echo "<br>";

echo "---------------------------------->";
echo "<br>"; 
$url = 'https://www.w3schools.com/php/default.asp';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo "<br>";
echo 'Host : '.$url['host']."\n";
echo "<br>";
echo 'Path : '.$url['path']."\n";
?>

<?php
echo "<br>";
echo "<br>";
// syntax
// mixed preg_replace ( mixed $pattern , mixed $replacement , mixed $subject [, int $limit = -1 [, int &$count ]] )

echo "---------------------------------->";
echo "<br>";
// $text = ["PHP" ,"Tutorial","mmmm"];
$text = 'PHP Tutorial';
// echo "<span style='color:red;'>$text[0]</span>";
// echo substr($text,1)
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo ($text);
?>

<?php
echo "<br>";
echo "<br>";

echo "---------------------------------->";
echo "<br>"; 

echo '<a href="https://www.w3schools.com/php/default.asp">
<input type="submit" value="w3school"/>
</a>';
// echo header("Location: https://www.w3schools.com/php/default.asp");
// exit();
?>
