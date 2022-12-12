<?php
session_start();
?>

<?php
echo $_SESSION["table"];
echo "<br>";
echo "There are " . $_SESSION['NumLine'] . " lines in " . $_SESSION["NameFile"] . "\n";
echo "<br>";
echo "<br>";
echo "Last modified " . date("l, dS F, Y, h:ia", $_SESSION["Lastmodified"])."\n";
?>



