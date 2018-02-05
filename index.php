

<?php

class Car

{
public  $testvar = 33;


    public function setTestvar($testvar) { 
         global   $gvar;
static $stvar;
         
         $kk = $testvar;
        echo 'pass in kk value  ' .$kk ."<br>";
        echo 'init class = last value of dosomething after add:  ' .$this->testvar ."<br>";
        echo 'init static  ' .  $stvar ."<br>";
        echo 'init pass in ' .$testvar ."<br>";     
        $stvar += 2;
        echo 'New self static value + 2 &nbsp =  ' .  $stvar ."<br>";
        echo 'global pass in ' .$gvar ."<br><br>";
 // global   $testvar;
        echo 'before = init class: ' .$this->testvar ."<br>";
        $this->testvar = $testvar + $stvar; 
        echo "after pass in: ".$testvar ." + " .$stvar .' = '  .$this->testvar ."<br>";
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
        echo 'dosomehing  before add 1: ' .$this->testvar ."<br>";
        echo 'dosomething after add    1:  ' .$this->getTestvar();
        echo "<br><br>";
    }
    
 public function zzdosomething()
    {
        echo 'zzdosomehing  before add 1: ' .$this->testvar ."<br>";
        echo 'zzdosomething after add    1:  ' .$this->getTestvar();
        echo "<br><br>";
    }
}

$Testclass = new Car();

$Testclass->setTestvar(2);

$zz = $Testclass->dosomething();
        echo 'zzdosomehing  GLOBAL: ' .$gvar ."<br>";

echo "<br><br>";

        
 
 
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