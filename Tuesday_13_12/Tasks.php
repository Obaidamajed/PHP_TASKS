<?php
echo"<h2>1</h2>";
$color = ["red", "green","white"];
 echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the $color[0] lawn, the $color[1] house, the $color[2] sky.
   The new president and his first lady. - Richard M. Nixon";
   
   echo "<br><br> #########################################";
   echo "<br>";
   echo "<br>";

   echo"<h2>2</h2>";
   $color = ["white","green","red"];
   $UnOrderList  = <<< List
   <ul>
      <li>$color[0]</li>
      <li>$color[1]</li>
      <li>$color[2]</li>
   </ul>
   List;
   echo $UnOrderList;
   
   echo "<br><br> #########################################";
   echo "<br>";
   echo "<br>";  

   echo"<h2>3</h2>";
  $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
                  "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens",
                  "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
  asort ($cities);

  $keys = array_keys($cities);
//   echo "<pre>";
//   print_r($keys);
//   echo "</pre>";

//   echo "<pre>";
//   print_r($cities);
//   echo "</pre>";
  echo "The capital of " . $keys[0] . " is " . $cities [$keys[0]] . "<br>";
  echo "The capital of " . $keys[1] . " is " . $cities [$keys[1]] . "<br>";
  echo "The capital of " . $keys[2] . " is " . $cities [$keys[2]] . "<br>";

  echo "<br><br> #########################################";
  echo "<br>";
  echo "<br>";  
  echo"<h2>4</h2>";
  $color = array (4 => 'white', 6 => 'green', 11=> 'red');
  print_r(array_values($color)[0]);

  echo "<br><br> #########################################";
  echo "<br>";
  echo "<br>";

  echo"<h2>5</h2>";
  $newArray = [1, 2, 3, 4, 5];
  array_splice($newArray, 3,0, "$");
  echo "<pre>";
  print_r($newArray);
  echo "</pre>";

  echo "<br><br> #########################################";
  echo "<br>";
  echo "<br>";

  echo"<h2>6</h2>";
  $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
  asort($fruits);
  echo "<pre>";
  print_r($fruits);
  echo "</pre>";

  echo "<br><br> #########################################";
  echo "<br>";
  echo "<br>";
  
  echo"<h2>7</h2>";
  $temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
  function accum($item , $def){
   return $def + $item;
  }
  $total_temp = array_reduce($temp, "accum", 0);
  $avg = $total_temp/count($temp);
  echo 'Average Temperature is: ' . $avg;
  echo '<br>';
  sort($temp);
  echo 'List of five lowest temperatures: ';
  for ($i=0;$i<=4;$i++){
      echo $temp[$i] . ' ,';
  };
  echo '<br>';
  echo 'List of five lowest temperatures: ';
  for ($i=count($temp)-5 ; $i<=count($temp)-1 ; $i++ ){
      echo $temp[$i] . ' ,';
  };

  echo "<br><br> #########################################";
  echo "<br>";
  echo "<br>";

  echo"<h2>8</h2>";
  $array1 = array("color" => "red", 2, 4);
  $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
  echo "<pre>";
  print_r(array_merge($array1,$array2));
  echo "</pre>";


  echo "<br><br> #########################################";
  echo "<br>";
  echo "<br>";

  echo"<h2>9</h2>";
  $colors = array("red","blue", "white","yellow");
  echo "<pre>";
  // print_r(array_change_key_case($colors,CASE_UPPER));
  // print_r(array_change_key_case($colors,CASE_UPPER));
  // $newArray = changeValuesCase ($colors, \CASE_UPPER);
  $B=array_flip($colors);
  $A=(array_change_key_case($B,CASE_UPPER));
  print_r ($A);

  echo "</pre>";
   
  echo "<br><br> #########################################";
  echo "<br>";
  echo "<br>";

  echo"<h2>10</h2>";
  $colors = array("RED","BLUE", "WHITE","YELLOW");
  echo "<pre>";
  $B=array_flip($colors);
  $A=(array_change_key_case($B,CASE_LOWER));
  print_r ($A);
  echo "</pre>";

   ?>
