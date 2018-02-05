<?php
  
 ini_set('max_execution_time', 0); // 
$servername = "localhost";
$pdoservername = "mysql:host=localhost";
$username = "root";
$password = null;
$dbname = "zzyytest";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);


try {
    
    $zconn = new PDO("$pdoservername;$dbname", $username, $password);
    
    // set the PDO error mode to exception
    $zconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully" ."<br>";
    }
catch(PException $e)
    {
    echo "Connection XXXXXXXXXXX failed: " . $e->getMessage() ."<br>";
    }

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error) ."<br>";
} 

$sql = "SELECT id, username, email, isAdmin FROM ore_users order by id";
$result = $conn->query($sql);
$zzresult = $conn->query($sql);

//$zz =    mysqli_fetch_all($conn->query($sql),MYSQLI_NUM);

$zz =    mysqli_fetch_all($zzresult,MYSQLI_ASSOC);

var_dump($zz);


for ($r=0; $r<count($zz);$r++) {

//echo "id: " . $zz[$r]["id"]. " - Name: " . $zz[$r]["username"]. '  - Email: '  .$zz[$r]["email"]."<br>";
        echo "id: " . $zz[$r][0]. " - Name: " . $zz[$r][1]. '  - Email: '  .$zz[$r][2]."<br>";
        

    }    

    echo '<br><br>';
$data = array();
if ($result->num_rows > 0) {
    $i=0;
    // output data of each row
    while($row = $result->fetch_assoc()) {
    //while($row = $result->fetch_array()) {
        $i++;
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. '  - Email: '  .$row["email"]."<br>";
        //$data=$row["id"];
        $data[$i]['id']=$row["id"];
        $data[$i]['username']=$row["username"];
        $data[$i]['email']=$row["email"];
        
    }
} else {
    echo "0 results";
}

var_dump($data);
die();

//var_dump($data);
echo '<br><br>';
//var_dump($data);

echo "id: " . $data[3]['id']. " - Name: " . $data[3]['username'] ."<br>";
echo '<br><br>';
for ($i=1; $i<count($data); $i++) {
//foreach ($data[$i] as $c[$i]=>$v[$i]) {
  
 // echo 'Key = '. $c[$i] . '  Value = ' .$v[$i] .'<br>';
    foreach ($data[$i] as $c=>$v) {
     echo 'Key = '. $c . '  Value = ' .$v .'<br>';
  
     }
}


echo '<br><br>';
for ($r=1; $r<count($data);$r++) {
    //for ($c=0; $c < count(current($data)); $c++) {
    
    echo "id: " . $data[$r]['id']. " - Name: " . $data[$r]['username'] ." - Email: " . $data[$r]['email'] ."<br>";
    
//}

}


die;

        $i=1;
        
        do {

        $day='1990-01-01';
        $cnt = 0;

                for ($cnt=0; $cnt <= 2; $cnt++) {

                    break;
                    echo "Runing <br>";
                    $NewDate = date('Y-m-d', strtotime($day . " +$cnt days"));        

                    $date_time =    date('h:i:s' ,  strtotime(" + $cnt seconds")); 
                    //$date_string = date('Y-m-d', strtotime(" + $cnt days")); 
                    $date_string = date('Y-m-d', strtotime($NewDate)); 

                    $date_int = str_replace('-', '', $date_string);
                    $date_datetime = str_replace(':', '', $date_time);
                    $date_datetime = $date_int.$date_datetime;

                    $sql = "insert into ore_date_type (yymmdd_int, yymmdd_date, yymmdd_datetime, yymmdd_char) values ($date_int, $date_int, $date_datetime, $date_int)"        ;
                    $result = $conn->query($sql);
                }
                $i++;
        }

        while ($i<=2);

$conn->close();
?>

