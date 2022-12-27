<?php
/*
echo "Hello World!";
echo "<br>";
echo "India";

$name = "Amit Shaw";

$number = "no.1";
$num = 2;
$add = 3;
echo "<br>";
echo "My name is $name. I am $number Programmer";

echo "<br>";
$sum = $num + $add;
echo "$sum";
*/

// $color = array('white', 'green', 'red', 'blue', 'black');
//  //echo "The memory of that scene for me is like a frame of film forever frozen at that moment: $color[2] carpet, the $color[1]   lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
//  $color = array('white', 'green', 'red');
//  foreach ($color as $c)
//  {
//  echo "$c, ";
//  }
//  echo "<ul>";
//  foreach ($color as $y)
//  {
//  echo "<li>$y</li>";
//  }
//  echo "</ul>";

$anyname = array("Amit","Graduate","Developer");
$anyname1 = array('Amit'=> 'Awesome' , 'Bobby'=> 'Very Honest' , 'Developer' => 'Full-Stack');
$anyname2 = array(["Amit","Awesome"] , ["Education","Graduation"] );

// echo $anyname[0];

//forloop
/*for( $i = 0; $i < count($anyname); $i++){
         echo "<br>";
         echo $anyname[$i];
}
$a = 0;

//while
while( $a < 10){
    echo "<br>";
    echo $a;
    $a++;
}

//dowhile
do{
    echo "<br>";
    echo $a;
    $a++;
}while($a < 15);

//foreach 
foreach($anyname as $key){
    echo "<br>";
    echo $key;
}

//Multidimensional for each
foreach($anyname1 as $key => $value){
    echo "<br>
     $key and $value";
}

//search in array
echo in_array("Amit",$anyname);

//date
 date_default_timezone_set("Asia/Kolkata");
 echo date("h:i:s:a");
 echo date("y:m:h");
 echo date("l");

 //trim
$b = "bcyname";
$t = trim($b,"name");
echo $t;

//length
$c = "name";
$l = strlen($c);
echo $l;

//Reverse
$c = "name";
$l = strrev($c);
echo $l;
*/
//replace
$c = "name";
$l = str_replace("name","myname", $c);
echo $l;

?>