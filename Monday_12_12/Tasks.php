<?php 
session_start();
?>
<?php
$A=1000;
$B=1200;
$C=1400;
echo <<< table
<table border=2>
<tr>
<td>
salary of Mr.A is
</td>
<td>
$A$
</td>
</tr>
<tr>
<td>
salary of Mr.B is
</td>
<td>
$B$
</td>
</tr>
<tr>
<td>
salary of Mr.C is
</td>
<td>
$C$
</td>
</tr>
</table>
table;

$_SESSION["table"]=<<< table
<table border=2>
<tr>
<td>
salary of Mr.A is
</td>
<td>
$A$
</td>
</tr>
<tr>
<td>
salary of Mr.B is
</td>
<td>
$B$
</td>
</tr>
<tr>
<td>
salary of Mr.C is
</td>
<td>
$C$
</td>
</tr>
</table>
table;
?>


<?php
echo "<br>";
$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name); 
$_SESSION["Lastmodified"]=$file_last_modified;
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>
<?php
    echo "<br>";
    echo "<br>";
    $filePath = "Tasks.php";
    $_SESSION["NameFile"]=$filePath;
    $lines = count(file($filePath));
    $_SESSION["NumLine"]=$lines;
    echo " There are $lines lines in $filePath"."\n";
?>
