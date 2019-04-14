
<!DOCTYPE html> 
<html> 
<body> 

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
<label for="name">Please enter your name: </label> 
<input name="name" type="text"><br> 
<label for="email">Please enter your email: </label> 
<input name="email" type="text"><br> 
<label for="phone">Please enter your phone: </label> 
<input name="phone" type="text"><br> 
<input type="submit" value="Submit" name="SubmitForm"> 
</form> 

<?php
 require ("db.php");

if(isset($_POST['SubmitForm'])){
    $nm=$_POST['name']; 
    $email=$_POST['email']; 
    $phone=$_POST['phone'];

   

    $dbh=connectDb(); 
        
    if(!$dbh){
        die("No conection" .mysqli_error());
    }

    if (!mysqli_select_db($dbh,"phone_book")){
        die("Unable to select database: " . mysql_error()); 
    }

    $sql_stmt = "INSERT INTO `phonebook` (`name`,`email`,`mobile`)"; 
    $sql_stmt .= " VALUES('$nm',' $email ','$phone')";

    $result = mysqli_query($dbh,$sql_stmt);  

    if (!$result)  {   
        die("Adding record failed: " . mysqli_error()); 
        
    }
    mysqli_close($dbh); 
}

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
        // <a href="/teb/phonebookrecord.php?id=38">38</a>
        echo '<a href="/teb/phonebookrecord.php?id=' . $row['id'] . '">' . $row['id'] . '</a><br>';
        echo 'name' .$row['name'] . '<br>';
        echo 'email' .$row['email'] . '<br>';
        echo 'mobile' .$row['mobile'] . '<br>';
    }
}
mysqli_close($dbh);
?>
</body> 
</html> 