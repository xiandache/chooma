<?php


    $config = array(
  
	'MALAYSIA'=>array(
                                                                //'class'=>'CLogRouter',
                                                                'SELANGOR'=>array(
                                                                                        //array(
                                                                                    'PETALING JAYA' => 'PJ',
                                                                                    //  'levels'=>'error, warning, info, trace, vardump',
                                                                                    'SUBANG JAYA' => 'SJ',
                                                                        ),
                                                                //),
                                                                'JOHORE'=>array(
                                                                  //                      array(
                                                                                    'JOHORE BAHRU' => 'JB',
                                                                                    //  'levels'=>'error, warning, info, trace, vardump',
                                                                                    
                                                                        ),
                                                                //),
		),
        

    );
     
$age = array( 
                    array(   
                                array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"),
                                array("xPeter"=>"135", "xBen"=>"317", "xJoe"=>"433"),
                            ),
                    );
    
/*

foreach ($age as $row1=>$r1){
    foreach ($r1 as $row2=>$r2){
        foreach ($r2 as $key=>$value) {
                    //echo ' Key ' .$key .' Value ' .$value .'<br><br>';
        }
    }    
}
*/

foreach ($age[0] as $k => $v) {
        foreach ($v as $key=>$value) {
                    echo ' xKey ' .$key .' xValue ' .$value .'<br><br>';
        }
    
}

echo 'xxxxxxxxxxxxxKey ' .$age[0][0]['Peter'] .'<br><br>';

$y = count($age[0][0]);
        $y1 = count($age[0]);
        $y2 = count($age);
        foreach ($age as $key=>$v) {
            foreach ($v as $k=>$value) {
                echo ' Row ' .$k .'<br><br>';
                foreach ($value as $t=>$n) {
                    echo ' Key ' .$t .' Value ' .$n .'<br><br>';
        }
    }
    }    

      $myArray = array( 
array(
                                array("name"=>"Keon", "Age"=>"17"),
                                array("name"=>"Terence", "Age"=>"32"),
),
                    );
    echo '<br><br>';
$last_names = array_column($myArray[0], 'name');
$umur = array_column($myArray[0], 'Age');
var_dump($last_names);
    echo '<br><br>';
 echo ' Name: '.$last_names[0] .', Age: '.$umur[0].'<br>';
 echo ' Name: '.$last_names[1] .',  Age: '.$umur[1].'<br>';
echo '<br><br>';
    for($i=0; $i < count($myArray[0]); $i++)
     {
        //for ($j=0; $j < count($myArray[$i]); $j++)         {
        //foreach ($myArray[0][$i]as $key => $value) {
                       //echo ' Key ' .$key.' Value ' .$value .'<br><br>';
                        echo ' Key ' .$myArray[0][$i]['name'] .', Age = '.$myArray[0][$i]['Age'].'<br>';
        //}
            
            
        
        echo ". <br/>";
    }