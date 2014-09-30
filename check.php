<?php

mysql_connect("localhost", "root", ""); 
mysql_select_db("event");

 
$myusername=$_POST['user_name']; 
$mypassword=$_POST['password']; 

$sql="SELECT * FROM user1 WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);


if($count==1){
 

header("location:outlook.php");
}
else {
echo "Wrong Username or Password";
//header("location:login.php");
}
?>

//hi 
