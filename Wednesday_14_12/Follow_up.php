<?php 
session_start();

echo "oday is 23 years old and has 22 JOD in his hand";
echo "<br>";
class userInfo {
  public $name;
  public $age;
  public $money;
  // function __contructor($name, $age, $money){
  // $this ->name=$name;
  // $this ->age=$age;
  // $this ->money=$money;
  // }
function setData($name, $age, $money){
  $this ->name=$name;
  $this ->age=$age;
  $this ->money=$money;
}

function getData(){
  echo "$this->name is $this->age and has $this->money" . "<br>";
}

}
$user = new userInfo ();
$mohammad = new userInfo ();
$user->setData("Jack", "19", "100 JOD");
$mohammad->setData("mohammad", "20", "200 JOD");
$user->getData();
$mohammad->getData();
echo "<br>";
// print_r($user);
echo "<br>";
// echo "$user->name is $user->age and has $user->money";
// echo "$mohammad->name is $mohammad->age and has $mohammad->money";
?>



