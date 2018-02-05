<?php
  
  include (".\Car.php");

  
$Testclass = new Car();

$Testclass->setTestvar(2);

$zz = $Testclass->dosomething();


        
 
 
$Testclass->setTestvar(2);
$Testclass->dosomething();


$Testclass->setTestvar(5);
$Testclass->dosomething();



echo "<br>";
        echo "NEW INIT CLASS<br>";
$T = new Car();
$T->dosomething();

echo "<br>";
 echo "NEW CLASS VALUE<br>";
$T->setTestvar(12);
$T->dosomething();

 echo "END CLASS <br><br>";