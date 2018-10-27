
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>

</head>

<body>
<?php

include("db connect.php");
if(@$_REQUEST["del"]=="Delete")
{
	//Delete Button
	
	$sql="update hospital set isactive=0 where email=".$_REQUEST["email"];
	
	
	
	$res=mysql_query($sql);
	echo("<script>alert('Data Deleted')</script>");
	
}
else
{
	
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
	
	$isAdmin=0;
	if($_REQUEST["ia"] == "isAdmin")
	{
		$isAdmin=1;
	}
	
$sql="update hospital set name='".$_REQUEST["name"]."' ,address='".$_REQUEST["add"]."' ,city='".$_REQUEST["city"]."',
patientid=0, employeeid=0, phone='".$_REQUEST["ph"]."', email='".$_REQUEST["mail"]."',pass='".$_REQUEST["pass"]."' ,isactive=
".$act.",isadmin=".$isAdmin." ,isapprove=".$app.",mobile='".$_REQUEST["mob"]."' where email='".$_REQUEST["mail"]."'";
	
	//echo($sql);
	
	$res=mysql_query($sql);
	echo("<script>alert('Data Updated')</script>");
	
	
}
mysql_close($con);	
?>

</body>
</html>
