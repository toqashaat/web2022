<?php
// prime number
function prime($num)
    {
     for($x=2; $x<$num $x++)
       {
          if($n % $x ==0)
              {
               return 0;
              }
        }
      return 1;
    }
    $a = prime(3);
    if ($a==0)
    {
    echo 'This is not a Prime Number.....'."\n";
    }
    else
    {
    echo 'This is a Prime Number..'."\n";
    } 
?>
// factorial

<?php
function factorial($num)
{
  if($num ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $num * factorial($num-1);
    }
	}
print_r(factorial(3)."\n");

?>
// Palindrom number

<?php
function Palindrome($string){ 
    if (strrev($string) == $string)
    { 
        return 1; 
    }
    else
    {
        return 0;
    }
} 
$a = "112211";
if(Palindrome($a))
{ 
    echo "Palindrome"; 
}
else
 { 
echo "Not a Palindrome"; 
}
?>

// Reverse String
<?php
$string = "JAVATPOINT";  
$length = strlen($string);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
}  
 
?>
 


