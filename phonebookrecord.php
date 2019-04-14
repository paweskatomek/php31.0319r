
<?php
 require ("db.php");
 if(isset($_POST['SubmitForm'])){
    $nm=$_POST['name']; 
    $email=$_POST['email']; 
    $phone=$_POST['mobile'];
    $id=$_POST['id'];
   

    $dbh=connectDb(); 
        
    if(!$dbh){
        die("No conection" .mysqli_error());
    }

    if (!mysqli_select_db($dbh,"phone_book")){
        die("Unable to select database: " . mysql_error()); 
    }

    $sql_stmt = "UPDATE `phonebook` set `name`='$nm', `email`='$email', `mobile`='$phone' where id=$id"; 

    $result = mysqli_query($dbh,$sql_stmt);  

    if (!$result)  {   
        die("Adding record failed: " . mysqli_error()); 
        
    }
    mysqli_close($dbh); 
    
    header('Location: ' . '/teb/phonebookrecord.php?id=' . $id);
} else {
$dbh=connectDb();
$id = $_GET['id'];
if(!$dbh){
    die("No conection" .mysqli_error());
}

if(!mysqli_select_db($dbh,"phone_book")){
    mysqli_close($dbh);
    die("conect select" .mysqli_error());
}

$sql_stmt = "SELECT * FROM phonebook where id=$id";
$result = mysqli_query($dbh,$sql_stmt);
if(!$result){
    mysqli_close($dbh);
    die("unable to execute query");
}

$rows = mysqli_num_rows ($result);

if($rows){
     $row = mysqli_fetch_array ($result);
        echo 'ID' . $row['id'] . '<br>';
        echo 'name' .$row['name'] . '<br>';
        echo 'email' .$row['email'] . '<br>';
        echo 'mobile' .$row['mobile'] . '<br>';
        ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
        <label for="name">Please enter your name: </label> 
        <input name="name" type="text" value="<?php echo $row['name'];?>"><br> 
        <label for="email">Please enter your email: </label> 
        <input name="email" type="text" value="<?php echo $row['email'];?>"><br> 
        <label for="mobile">Please enter your phone: </label> 
        <input name="mobile" type="text" value="<?php echo $row['mobile'];?>"><br> 
        <input type="submit" value="Submit" name="SubmitForm"> 
        <input name="id" type="text" hidden value="<?php echo $row['id'];?>"><br> 
        </form>
        <?php


}
        mysqli_close($dbh);
}
?>
