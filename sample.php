<?php
// الاعداد من 1 ل 10 بينهم -
for ($i=1;$i<=10;$i++){
    echo $i ;
    if ($i<10){
        echo "-";
    }else{
        echo "/n";
    }

}
//النجم عدل
for ($i=0;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*" ;
    }
    echo "<br>";
}
// النجم مقلوبة
for ($i=0;$i<=5;$i++){
    for($j=0;$j<=7;$j++){
        echo "*" ;
    }
    echo "<br>";
}
//T
for ($row=0; $row<6; $row++){
  for ($column=0; $column<=7; $column++){
  if ($column == 3 or ($row == 0 and $column > 0 and $column < 6))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
//factorial 3
$num=3;
$f=1;
for($i=$num;$i>=1;$i--){
    $f=$f*$i;

}
echo $f;

 // count 5- 15
$x=5;
 While($x<=15){
    echo $x ."<br>";
    $x++;
 } 
?>