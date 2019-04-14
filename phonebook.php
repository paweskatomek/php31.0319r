<?php

require ("db.php");


$dbh=connectDb();

if(!$dbh){
    die("No conection" .mysqli_error());
}

if(!mysqli_select_db($dbh,"phone_book")){
    mysqli_close($dbh);
    die("conect select" .mysqli_error());
}

$sql_stmt = "SELECT * FROM phonebook";
$result = mysqli_query($dbh,$sql_stmt);
if(!$result){
    mysqli_close($dbh);
    die("unable to execute query");
}

$rows = mysqli_num_rows ($result);

if($rows){
    while ($row = mysqli_fetch_array ($result)){
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'name: ' .$row['name'] . '<br>';
    }
}
mysqli_close($dbh);

?>