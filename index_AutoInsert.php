<?php
  
ini_set('max_execution_time', 0); 
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "xorep111";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error. '<br><br>');
}
else {
    echo '---------Running----------'. '<br><br>';
} 

        $i=0;
        do {
            
        $day='1990-01-01';
        $cnt = 0;

                for ($cnt=0; $cnt <= 10000; $cnt++) {

                    $NewDate = date('Y-m-d', strtotime($day . " +$cnt days"));        
                    
                    $date_time =    date('h:i:s' ,  strtotime(" + $cnt seconds")); 
                    
                    $date_string = date('Y-m-d', strtotime($NewDate)); 

                    $date_int = str_replace('-', '', $date_string);
                    $date_datetime = str_replace(':', '', $date_time);
                    $date_datetime = $date_int.$date_datetime;

                    $sql = "insert into date_type (yyyymmdd_type_int, yyyymmdd_type_date, yyyymmdd_type_datetime, yyyymmdd_type_char) values ($date_int, $date_int, $date_datetime, $date_int)"        ;
                    $result = $conn->query($sql);
                }
                $i++;
        }

        while ($i<=300);

$conn->close();

echo '---------Completed----------'. '<br><br>';
?>

