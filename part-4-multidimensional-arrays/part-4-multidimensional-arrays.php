<?php

$myarray = array ( 
    "musicals" => array ( "Oklahoma" ,  "The Music Man" , "South Pacific" ),
    "dramas" => array ( "Lawrence of Arabia" , "To Kill a Mockingbird" , "Casablanca" ), 
    "mysteries"=> array ( "The Maltese Falcon" , "Rear Window" , "North by Northwest" ) 
);

// print_r($myarray);
krsort($myarray);
foreach($myarray as $key => $value ){
  print_r($key . "<br>");

    foreach($value as $key2 => $value2){
        echo " ----> $key2 = $value2 <br> ";

    }
// print_r($value);
}
?>