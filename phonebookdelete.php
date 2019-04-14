
<?php
    require ("db.php");
    $dbh=connectDb(); 
    $id = $_GET['id'];
if(!$dbh){
    die("No conection" .mysqli_error());
}

if(!mysqli_select_db($dbh,"phone_book")){
    mysqli_close($dbh);
    die("conect select" .mysqli_error());
}

    $sql_stmt = "DELETE FROM phonebook where id=$id";
    $result = mysqli_query($dbh,$sql_stmt);


if(!$result){
    mysqli_close($dbh);
    die("unable to execute query");
}


mysqli_close($dbh);

?>
