<?php
require("book.php");

$maths = new Book("Pitagoras","Arhimedes") ;
$chemistry = new Book("Nobel","Skłodowska");
$physical =  new Book("Live","Froyd");

echo $maths-> author," - ";
echo $maths-> title, "<br>";



?>