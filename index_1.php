

<?php

class Car

{
public  $testvar = 33;
private $ppp=2;
static $stvar = 88;

    public function setTestvar($testvar) { 
         global   $gvar;
         
         $kk = $testvar;
        echo 'pass in kk value  ' .$kk ."<br>";
        echo 'init class = last value of dosomething after add:  ' .$this->testvar ."<br>";
        echo 'init static  ' .  self::$stvar ."<br>";
        echo 'init pass in ' .$testvar ."<br>";     
        self::$stvar += 2;
        echo 'New self static value + 2 &nbsp =  ' .  self::$stvar ."<br>";
        echo 'global pass in ' .$gvar ."<br><br>";
 // global   $testvar;
        echo 'before = init class: ' .$this->testvar ."<br>";
        //$this->testvar = $testvar + self::$stvar; 
        //echo "after pass in: ".$testvar ." + " .self::$stvar .' = '  .$this->testvar ."<br>";
        $this->testvar += 2; 
        echo 'after self add above +2= ' .$this->testvar ."<br>";
        $gvar += $this->testvar;
        echo 'after   global class = previous line value:  ' .$gvar ."<br><br>";
    }
    public function getTestvar() { 
        
                return $this->testvar += 1; 
    }

    function dosomething()
    {
        echo "dosomething <br><br>";
         global   $gvar;
         $stvar = $gvar;
         $stvar ++;
        self::$stvar += 10;
        //$stvar += 10;
        $gvar +=10;
        echo 'dosomething local STATIC class zzzzzzzz:  ' .self::$stvar ."<br>";
        echo 'dosomething local DECLARED class zzzzzzzz:  ' .$stvar ."<br>";
        echo 'dosomething global class:  ' .$gvar ."<br>";
        echo 'dosomehing  before xxxxxxxxxx add 1: ' .$this->testvar ."<br>";
        echo 'dosomething after add    1:  ' .$this->getTestvar();
        echo "<br><br>";
        echo 'dosomething STcccccccccccccccccATIC:  ' .  $this->ppp ."<br><br><br>";
    }
    
 public static function zzdosomething()
    {
     global   $gvar;
    
        echo 'zzzzzzzzdosomehing  before add 1: ' .  $gvar ."<br>";
        echo 'zzdosomething after add    1:  ' .++$gvar."<br>";
        echo "<br><br>";
        
        //return $this->testvar;
    }


public static function myPOW($base, $m) {
    $result =1;
    for ($i=1; $i<=$m; $i++) {
     $result = $result * $base;
    }
return $result;
}


}

echo Car::myPOW(3, 3);
echo "<br><br>";
echo pow(2, 3);
echo "<br><br>";
$Testclass = new Car();

$Testclass->setTestvar(2);

$zz = $Testclass->dosomething();
echo 'GET STATIC VALUE:  ' .  Car::$stvar ."<br><br><br>";
//echo 'dosomething global class zzzzzzzz:  ' .$gvar ."<br>";
        
 $zzz = Car::zzdosomething();
 
 echo 'dosomething STATIC:  ' .$zzz ."<br><br><br>";
  echo 'dosomething STATIC:  ' .$Testclass->testvar ."<br><br><br>";
  
  
 
$Testclass->setTestvar(2);
$Testclass->dosomething();
echo 'GET STATIC VALUE:  ' .  Car::$stvar ."<br><br><br>";
echo 'zzdosomethixxxxxxxxng after add    1:  ' .++$gvar."<br>";
echo 'dosomething global class zzzzzzzz:  ' .$gvar ."<br>";

$Testclass->setTestvar(5);
$Testclass->dosomething();
echo 'dosomething global class zzzzzzzz:  ' .$gvar ."<br>";


echo "<br>";
        echo "NEW INIT CLASS<br>";
        echo 'GET STATIC VALUE:  ' .  Car::$stvar ."<br><br><br>";
        
$T = new Car();
$T->dosomething();

echo "<br>";
 echo "NEW CLASS VALUE<br>";
$T->setTestvar(2);
$T->dosomething();
echo 'GET STATIC VALUE:  ' .  Car::$stvar ."<br><br><br>";
 echo "END CLASS <br><br>";
 
 
 $colors = array("red"=>"r", "green"=>"g", "blue"=>"b", "yellow"=>"y"); 
 $zcolors = array("xred"=>"r", "xgreen"=>"g", "xblue"=>"b", "xyellow"=>"y"); 

 $colors = $colors + $zcolors;
foreach ($colors as $k=>$value) {
    echo "Key: $k" .", Value : '.$value <br>";
}