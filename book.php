<?php

class Book {
    var $price;
    var $title;
    var $author;



    function setPrice ($_price){
        $this->price=$_price;
    }
    function getPrice ($_price){
        return $this->price;
    }

    function __construct($_title,$_author){
    $this->title=$_title;
    $this->author=$_author;

    }
    
    

    
}
    $maths = new Book("Pitagoras","Arhimedes") ;
    $chemistry = new Book("Nobel","Skłodowska");
    $physical =  new Book("Live","Froyd");

    


    ?>