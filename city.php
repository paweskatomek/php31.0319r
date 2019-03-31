<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
</head> 
<body bgcolor="grey">	 
	<?php

		$name = $_GET['name']; 
        $city = $_GET['city']; 
        if($name=="look"){
            $image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrMefSAN4G7YWc40iDG33gIwWID4m6205SZyoyHIzstZ6vjuBB";
        }
        else{
            $image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS9kjmgzH5GV_ME-MqrUrHHwye6qSIVJmWHoPxhlY9cY3MFsL3";
        }
        echo "<img src = \"$image\" alt = \"nanilake\" height = \"400\" width=\"500\" /> "

		
	?> 
	<img src = "2.jpg" alt = "nanilake" height = "400" width="500" /> 
</body> 
</html> 
