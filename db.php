<html>
<body bgcolor="skyblue"
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db(event);
if(isset($_POST["sub"]))
{
$a=$_POST["txt1"];
$s=$_POST["txt2"];
$d=$_POST["txt3"];
$f=$_POST["txt4"];
$insert="INSERT INTO `event`.`event1`
(`ename`,`date`,`vanue`,`dis`
)
VALUES
('$a','$s','$d','$f')";

$rs=mysql_query($insert);
if($rs)
{
	echo "yes!!";
}
else
{
	echo "no";
}
if ($_FILES["file"]["error"] > 0) 
  {
    echo "There is some error in uploding the image<br>";
  } 
  else 
  {
   /* echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] ) . "<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";*/
    if (file_exists("upload/" . $_FILES["file"]["name"])) 
	{
      echo $_FILES["file"]["name"] . " already exists. ";
    } 
	else 
	{
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
      echo "successfully uploaded" . $_FILES["file"]["name"];
    }
  }
}
?>