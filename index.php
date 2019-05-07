<?php
function primeNumbers($count){
          $c = 0; 
		  $arr=array();
	for($i=1;;$i++){  //All the numbers to check for prime starting from 1

          $incrementCounter = 0; 
          for($j=1;$j<=$i;$j++){ //Checking the divisible probability


                if($i % $j==0){ 

                      $incrementCounter++; // Incrementing the counter if it is divisible
                }
          }

        //The basic rule of the prime number is that it should to divisible by 1 and itself
        if($incrementCounter==2){

			   $arr[$c]=$i;
			   $c++;
			   if($c==$count) // checking the count of array with number of prime numbers count required.
			   {
				   return $arr; // Returning the array with prime numbers
			   }
        }
		
    }
} 
if(isset($argv[1]))  //checking whether we are getting the input from command prompt or not
{
$value = $argv[1]; // Command prompt input
}
else
	$value=10; // Default input.

if(gettype($value)!='integer') //If the provided input is not an integer.
{
	echo "Invalid Input Given. Please enter only numbers.";
	die();
}
$array=primeNumbers($value); // calling a function to get the prime number.
echo "<table><tr><td></td>";
echo "<td><table style='width:100%;'><tr>";
for($c=0;$c<count($array);$c++)
{
echo "<td style='border-bottom:1px solid black;'>".$array[$c]."</td>"; // displaying horizontal header row with prime numbers
}
echo "</tr></table></td></tr>";
for($b=0;$b<count($array);$b++)
{
	echo "<tr>";
		echo "<td style='border-right:1px solid black;'>$array[$b]</td>"; // displaying vertical row with prime numbers
		echo "<td><table style='width:100%'><tr>";
		for($a=0;$a<count($array);$a++)
	{
		echo "<td>".$array[$a]*$array[$b]."</td>"; // displaying the multiplication of numbers.
	}
		echo "</tr></table></td>";
	
	echo "</tr>";
}
echo "</table>";
?>
<style>
table{
	text-align:center;
}
</style>