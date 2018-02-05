<?php
class Foo {
    // Static counter; shared with every instance
    public  $mm;
    public  $m;
    private static $next=0;
    private static $nextID=0;
    

    // Normal instance property: each instance will have its own value
    private $myID;

    public function __construct() {
        global $ggg;
              $ggg++;
        //self::$next++;
              
        echo 'CONTRUST........: '.self::$next ."<br>";
         self::$next++;
        $this->m = self::$next;
        echo 'CONSTRUCT  MMM: '.$this->m ."<br><br>";
        // Set the ID for this instance to the next ID
        //$this->myID = self::$nextID;
        
        
        // Increment the shared counter
        //self::$nextID++;
    }
    public function __destruct()
	{
                                        echo 'DDDDDDDDDDDDD mm: '.$this->m ."<br>";
		echo 'destroying the object..................' ."<br><br>";
                
	}
public function  getID() {
    $mm=0;
    echo 'mm: '.$mm ."<br>";
    echo 'Enter Next ID: '.self::$nextID ."<br>";
    $this->mm++;
    echo 'mm: '.$this->mm ."<br>";
    $this->myID++;
    echo 'Enter myID: ' .$this->myID ."<br>";
    self::$nextID++;
    echo 'leave Next ID SAME with MMM: '.self::$nextID ."<br>";
    $mm=888;
    return $this->myID;
}
}

$x = false;
$y = true;

echo $x ? 'True' : 'False';
echo '<br>';
echo $x . '  ' .$y;
echo '<br>';
var_dump($x);
var_dump($y);

$zz = new Foo;
/*
echo 'Get ID 1: '.$zz->getID() ."<br>";
echo 'Get MM 2: '.$zz->mm ."<br><br>";

$zz->mm = 9999;
echo 'Get ID 3: '.$zz->getID() ."<br><br>";
//echo 'Get MM 4: '.$zz->mm ."<br><br>";
echo 'EEEEEEEEEEEE '.$zz->mm ."<br><br>";
echo 'Get GLOBAL: '.$ggg ."<br><br>";
*/

//$z1 = new Foo;
echo '3333<br><br>';
$zzz3 = new Foo;
$zzzz = new Foo;
echo 'Get ID 3331: '.$zzz3->getID() ."<br>";
echo 'Get MM 3332: '.$zzz3->mm ."<br>";
echo 'Get GLOBAL: '.$ggg ."<br><br>";
echo  "<br><br>";
/*
$zzz = new Foo;
echo 'Get ID: '.$zzz->getID() ."<br><br>";
echo 'Get mm: '.$zzz->mm ."<br><br>";
echo 'Get ID: '.$zzz->getID() ."<br><br>";
*/

//echo 'Get mm: '.$zzz->mm ."<br><br>";
$x = 12;
$y = 11;


if ($x != $y) {
    echo "NOT = value is : ".$x % $y ."<br><br>";
}
 elseif  ($x==2) {
     echo "value is : ".$x % $y ."<br><br>";
 }
 else {
     echo "value else is : ".$x % $y ."<br><br>";
 }
 
 $x=16;
 switch ($x) {
         
         case 1;
             echo "value 1 is : ".$x % $y ."<br><br>";
             break;
         case 2;
             echo "value 2 is : ".$x % $y ."<br><br>";
             break;
         default;
             echo "value 3 MODULE is : ".$x % $y ."<br><br>";
             }
             
             $i=0;
            while ($i < 3) {
                echo "value 3 is : ".$i ."<br>";
                $i++;
            }
            
            $i=10;
            do {
                echo "value 3 is : ".$i ."<br>";
                $i++;
            
            }  while ($i < 13) ;
       echo  "<br><br>";         
            
            for ($i=10;$i<13;$i++) {
                   echo "value 3 is : ".$i ."<br>";
            }