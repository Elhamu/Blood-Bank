<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

//echo($_FILES["file"]["type"]);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000))//size in byte 200KB
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
/*
    elseif (file_exists("C:/xampp/htdocs/PHP21-1/UploadFiles/Upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
	  */
    else
      {
		 $photo=$_FILES['file']['name'];
						
						$mime=substr($photo,strpos($photo,"."));
						
						
						$newImagNAme=rand(1,1000000).chr(rand(97,122)).$mime;
						
		  
  
	move_uploaded_file($_FILES["file"]["tmp_name"], "C:/xampp/htdocs/PHP21-1/UploadFiles/Upload/" .$newImagNAme);
	
	
	echo "Stored in: " . "C:/xampp/htdocs/PHP21-1/UploadFiles/Upload/" . $newImagNAme;
     // echo "Stored in: " . "C:/xampp/htdocs/Hospital/Upload/" . $_FILES["file"]["name"];
      }
    }
  
else
  {
  echo "Invalid file type or size";
  }


?>
</body>
</html>