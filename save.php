<?php

// move the arrays into something more managable
$age=$_POST['age'];
$place=$_POST['place'];
$disease=$_POST['disease'];
$t=$_POST['time'];
$msg=$_POST['message'];

   echo $age;
  
$fname="client_data.txt";


$fp=fopen($fname,"x") or die("error");
fwrite($fp,$age);
fclose($fp);
?>