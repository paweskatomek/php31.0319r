<?php 

// One way to create an indexed array 
$name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav"); 

// Accessing the elements directly 
echo "Accessing the 1st array elements directly:\n","<br>"; 
echo $name_one[2], "\n","<br>";
echo $name_one[0], "\n","<br>";
echo $name_one[4], "\n","<br>";

// Second way to create an indexed array 
$name_two[0] = "ZACK"; 
$name_two[1] = "ANTHONY"; 
$name_two[2] = "RAM"; 
$name_two[3] = "SALIM"; 
$name_two[4] = "RAGHAV"; 

// Accessing the elements directly 
echo "Accessing the 2nd array elements directly:\n","<br>"; 
echo $name_two[2], "\n","<br>";
echo $name_two[0], "\n","<br>";
echo $name_two[4], "\n","<br>"; 


foreach ($name_two as $x){
    echo $x ."<br>";

}


$name_count=count ($name_one);
echo "Liczba elementów w liście to: $name_count"
?> 


