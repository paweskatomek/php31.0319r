<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>First page php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

 <h1>   
<?php 
echo "Hello World!"; 
?> 
</h1>

<h2>
<?php 
echo "Multiple ","argument ","string!"; 
?> 
</h2>

<h3>
<?php 
//defining the variables 
$text = "Hello, World!"; 
  
$num1 = 10; 
  
$num2 = 20; 
  
//echoing the variables 
echo $text."\n"; 
  
echo $num1."+".$num2."="; 
  
echo $num1 + $num2; 
?> 
</h3>

<h4>
<?php 
print "Hello, world!"; 
?> 
</h4>

<p>


<?php 
  
  // function to demonstrate static variables 
  function static_var() 
  {    
      // static variable 
      static $num = 5; 
      $sum = 2; 
        
      $sum++; 
      $num++; 
        
      echo $num, "<br/>"; 
      echo $sum, "<br />"; 
  } 
    
  // first function call 
  static_var(); 
    
  // second function call 
  static_var(); 
    
  ?> 
</p>

<p>
<?php 

// decimal base integers 
$deci1 = 50; 
$deci2 = 654; 

// octal base integers 
$octal1 = 07; 

// hexadecimal base integers 
$octal = 0x45; 

$sum = $deci1 + $deci2; 
echo $sum; 

?> 

</p>

<p>
<?php 
  
  $name = "Krishna"; 
  echo "The name of the Geek is $name <br/>"; 
  echo "<h1>";
  echo 'The name of the geek is $name'; 
    echo "</h1>";
  ?> 

</p>
</body>
</html>


