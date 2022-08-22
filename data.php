<?php

// Date & Day
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";

// Time 
echo "The time is " . date("h:i:sa"). "<br>";
// حسب المنطقة 
date_default_timezone_set("America/New_York"). "<br>";  
echo "The time is " . date("h:i:sa"). "<br>";

// Make Time
$s=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $s). "<br>";

// Create a Date From a String With strtotime() ترتيب التاريخ 
$s=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $s). "<br>";

// تاريخ الغد
$s=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $s) . "<br>"; 

// طباعة تاريخ اليوم في الاسبوع القادم
$s=strtotime("next Sunday");
echo date("Y-m-d h:i:sa", $s) . "<br>";

//  التاريخ بعد 3 شهور
$s=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $s) . "<br>"; 


// طباعة يوم الاحد من اليوم لست اسابيع
$startdate = strtotime("Sunday");
$last = strtotime("+6 weeks", $startdate);

while ($startdate < $last) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>