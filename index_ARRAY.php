<?php

  $cityArray = array('Country'=>array( 
                                                            'MY'=>array( 
                                                                        'Malaysia'=>array(
                                                                                            'Selangor'=>array(   
                                                                
                                                                                                            'PETALING JAYA' => 'PJ',
                                                                                    
                                                                                                            'SUBANG JAYA' => 'SJ',
                                                                                        ),
                                                                                    ),
                                                              ),  
      )
      );
$zzArray = array();
  $zzArray = recrusive($cityArray);
  
  
  foreach ($cityArray as $ck=>$cv) {
      foreach ($cv as $ckk=>$cvv) {
          foreach ($cvv as $sk=>$svc) {
              foreach ($svc as $skk=>$svv) {
                  foreach ($svv as $skkk=>$svvv) {
                  echo  $ck .' : '   .$ckk .' -&nbsp&nbsp ' .$sk.' : '.$skk .' &nbsp&nbsp ' . $skkk .' &nbsp&nbsp '  .$svvv.' &nbsp&nbsp ' .'<br>';
              }
              }
          }
      }
  }
      
      
  echo 'RRRRRRRRRRRRRRRRRRRRRRRRRRRR<br><br>';
  var_dump($data);
  echo 'RRRRRRRRRRRRRRRRRRRRRRRRRRRR<br><br>';
  var_dump($cityArray);
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
    foreach($config as $countryname=>$country) {    
            foreach ($country as  $statename=>$state) {                    
                    foreach ($state as  $cityname=>$city) {
                    //foreach ($city as  $citycode=>$cityfullname) {
                    echo  $countryname .' : '   .$statename .' -&nbsp&nbsp ' .$cityname.' : '.$city .' &nbsp&nbsp ' .'<br>';
      //}
                    }     
            }
    }
    echo '<br><br>';
$addons = array(
	'session' => array(
		'class' => 'CDbHttpSession',
		'connectionID' => 'db',
		'sessionTableName' => '{{users_sessions}}',
		'autoCreateSessionTable' => false, //!!!                                      
                                       'timeout' => 10801,      //make sure sync with       Yii::app()->user->login($identity, 10801);
                                       //'timeout' => $login_expire_time,  not working, bomb in IE , not able to login in IE
                                        ),  
            'zzzsession' => array(
		'zzclass' => 'zzzzCDbHttpSession',		
                                        ),  
    
    
                        );


foreach($addons as $comp => $item) {
    
 foreach ($item as  $key=>$value) {
  echo $comp .' : '   .$key .' -&nbsp&nbsp ' .$value.'<br>';   
 }   
    }
    
echo '<br><br>';
                                            echo $addons['session']['class'] ."<br>";
                                            
                                            foreach($addons['session'] as $x => $x_value) {
                                                echo "Key=" . $x . ", Value=" . $x_value;
                                                echo "<br>";
                                            }

                                            
                        
                        $shop = array( array(
                array("Rose", 1.25 , 15),
                array("Daisy", 0.75 , 25),
                array("Orchid", 1.15 , 7)
                            )
            );

              for($i = 0; $i < count($shop); $i++){
                                for($ii = 0; $ii < count($shop[$i]); $ii++){
                  echo "<p><b>Row number $i</b></p>";
                    echo "<ul>";
                        foreach($shop[$i][$ii] as $key => $val) {
                            
                            echo "<li>".$key . ' = ' . $val ."</li>";
                        }
                        echo "</ul>";
                                }
                        
}              
     
$age = array (
    array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"),
    array("zPeter"=>"315", "zBen"=>"371", "zJoe"=>"413"),
    
    );
 
    
    
//echo "id: " . $age[1]['Peter']. " - Name: " . $age[1]['Ben'] ."<br>";

echo 'AGE<br><br>';

//for ($r=0; $r<count($age); $r++) {
    foreach ($shop as $a=>$b) {  
        foreach ($b as $c=>$vv) {  
    foreach ($vv as $k=>$v) {  
        echo 'Row: ' .$c. ', Key = '. $k . '  Value = ' .$v .'<br>';  
     }
        }
    }
     
//}



echo 'xxxxx<br><br>';

$cars = array
  (
  array("Volvo",22,18,8),
  array("BMW",15,13,),
  array("Saab",5,2,3,4,5,6,7),
  array("Land Rover",17,15,77)
  );

$c=null;
for($r=0;$r<count($cars);$r++){
    echo "Car: ";
    $vv = count($cars[$r]);
    unset($c);
    for($c=0;$c<count($cars[$r]);$c++){
        $v=$c;
        echo '  '.$cars[$r][$v];
    }
    //$c=null;
    
    echo "<br>";
}

echo '<br><br>';

//for ($r=0; $r<count($age); $r++) {
    foreach ($cars as $kk=>$vv) {  
    foreach ($vv as $k=>$v) {  
        echo 'Key = '. $k . '  Value = ' .$v .'<br>';
     }
     echo "<br>";
    }


/*
echo '<br><br>';
for ($i=1; $i<count($cars); $i++) {
    foreach ($cars[$i] as $k=>$v) {
    echo 'Key = '. $k . '  Value = ' .$v .'<br>';
  
     }
}
*/
echo '<br><br>';

$r = array(
    array  ('apple', 'orrange', 'papaya'),
    array  ('mango', 'rambuthan', 'laichi'),
  
  );


for ($i=0; $i<count($r); $i++) {
    echo "<br>";
//foreach ($r[$i] as $c[$i]=>$v[$i]) {
  for ($c=0;$c < count(current($r)); $c++) {
    //echo 'Key = '. $c[$i] . '  Value = ' .$v[$i] .'<br>';
      echo 'Key = '. $r[$i][$c]  .'<br>';
     }
}
echo "<br>";

$maxrow = count($cars);
//$maxcol = sizeof($cars);
for ($row = 0; $row < $maxrow; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}




 // On the line below, create your own associative array:
     $myArray = array ( 'at home' => array('laundry', 'dishes'),
                                    'shopping' => array('milk', 'bread','pasta'),
                                    'at work'=>array('Hans','copy folder 1'));

      // On the line below, output one of the values to the page:
      echo $myArray ['shopping'][2].'<br />';

      echo '<br><br>';
      
      
      
      // On the line below, loop through the array and output
      // *all* of the values to the page:
     foreach ($myArray as $place => $task) {
         foreach ($task as $thingToDo){
             echo $thingToDo.'<br />';
         }
     }
     
     
     $food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', NULL));
     
     
     foreach($food['fruits'] as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


function recrusive($array, $level=1) {
    
 Global $data;
 static $i=0;
 
 
 foreach ($array as $k=>$v) {
     
     if (is_array($v)) {
            recrusive($v, $level + 1);         
     }
     else {
         $data[$i]['key']=$k;
         $data[$i]['value']=$v;
         $i++;
     }
     
 }
 
    
    
    
    
}
        