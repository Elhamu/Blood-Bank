


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

include("db connect.php");
if(@$_REQUEST["del"]=="Delete")
{
	
	$sql="update doctors set Dactivation=0 where Did=".$_REQUEST["Did"];

	$res=mysql_query($sql);
	echo("<script>alert('Data Deleted')</script>");
	
}
else
{
	
	$gender=1;
	if($_REQUEST["gender"] == 0 )
	{
		$gender=0;
	}
	$act=0;
	if($_REQUEST["act"] == "active")
	{
		$act=1;
	}
	
	$app=0;
	if($_REQUEST["app"] == "approv")
	{
		$app=1;
	}
	
	$isadmin=0;
	if($_REQUEST["ia"] == "isAdmin")
	{
		$isAdmin=1;
	}
	
	
$sql="update employee set fn='".$_REQUEST["fn"]."' ,phone='".$_REQUEST["ph"]."' ,hospitalid=".$_REQUEST["hospital"].",gender=".$gender."
patientid=0, email='".$_REQUEST["mail"]."', ln='".$_REQUEST["ln"]."', pass='".$_REQUEST["pass"]."',mob=".$_REQUEST["mob"].",isactive=".$act." ,address='".$_REQUEST["add"]."',isadmin=".$isAdmin.",isapprove=".$app." ";
	
	//echo($sql);
	
	$res=mysql_query($sql);
	echo("<script>alert('Data Updated')</script>");
	
	
}
mysql_close($con);	
?>

</body>
</html>