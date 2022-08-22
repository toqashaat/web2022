<?php

for($x=0 ; $x<=100 ; $x+=10){
 echo " The number is : $x <br>";
}

$arr=["element 1" , "element 2" , "element 3" , "element 4"];
for($i=0 ; $i<count($arr);$i++){
    echo $arr[$i];
}

//foreach 
$color=array("red","green","black","yellow");
foreach ($color as $value){
    echo "$value  <br> ";
}

$age= array("Peter"=>"35","Ben"=>"37", "Jon"=>"43");
foreach ($age as $val){
    echo "$val  <br> ";
}

//while

$t=1;

while($t <=5){
    echo " The number is : $t <br>"; 
    $t++;
}

//do while

$y=1;

do{
    echo " The number is : $y <br>";
    $y++;
} while($y<=5);


?>