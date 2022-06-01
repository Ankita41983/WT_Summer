<?php
$uname=$pass="";

if(isset($_POST["Submit"])){
  $uname=$_REQUEST["uname"];
  if(empty($uname)){
  echo "please enter a valid name";
}else{
  echo "your name is".$uname;
}
echo"<br>";
$pass=$_REQUEST["pass"];
if(strlen($pass)<6){
  echo "please enter a valid pass and this field is required";
}else{
  echo "your password is valid";
}
echo"<br>";
if(isset($_POST["radio"])){
    echo "you have selected".$_POST["radio"];
}else{
  echo "you have not selected anything";
}
echo"<br>";
}

?>
