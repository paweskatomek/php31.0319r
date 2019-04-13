<?php 

// Defining a multidimensional array 
$favorites = array( 
	array( 
		"name" => "Dave Punk", 
		"mob" => "5689741523",  
        
	), 
	array( 
		"name6546" => "Monty Smith", 
		"mob" => "2584369721", 
		"email" => "montysmith@gmail.com", 
	), 
	array( 
		"name" => "John Flinch", 
		"domowy" => "9875147536", 
		"email" => "johnflinch@gmail.com", 
    ), 
    array( 
		"name" => "tomasz p", 
		"mob" => "9875147536", 
        "email" => "paweska.tomek@gmail.com", 
    ),

); 

// Accessing elements 
echo "tomasz p email-id is: " . $favorites[3]["email"], "<br>"; 
echo "tomasz p mobile number is: " . $favorites[3]["mob"], "<br>"; 
echo "tomasz p mobile name is: " . $favorites[3]["name"]; 
?> 
