<?php

$data=$_POST;
var_dump($data);
foreach ($data as $k=> $v) {
    
        echo "Key : ".$k .",  Value : ".$v ."<br>";
}