<?php

  if ($_FILES["file"]["error"] > 0) 
  {
    echo "There is some error in uploding the image<br>";
  } 
  else 
  {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] ) . "<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
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
 
?>