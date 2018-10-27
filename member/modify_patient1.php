<?php
include("session.php");
?>
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

	$sql="update patient set v=0 where email=".$_REQUEST["email"];
	
	
	
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
	$don=0;
	if($_REQUEST["don"] == "donator")
	{
		$don=1;
	}
	$ip=0;
	if($_REQUEST["ip"] == "patient")
	{
		$ip=1;
	}
	
	
$sql="update patient set fn='".$_REQUEST["fn"]."' ,lna='".$_REQUEST["ln"]."' ,pass='".$_REQUEST["pass"]."',city='".$_REQUEST["city"]."', address='".$_REQUEST["add"]."', phone='".$_REQUEST["ph"]."', mobile='".$_REQUEST["mob"]."',gender=".$gender." ,bid=".$_REQUEST["bloodtype"].",dateofbirth='".$_REQUEST["dob"]."',ispatient=".$ip.",employeeid=0,email='".$_REQUEST["mail"]."',did=0 ,callsid=
0,donnator=".$don.",isadmin=".$isAdmin.",isapproval=".$app.",isactive=".$act."  where email=".$_REQUEST["email"];
	
	//echo($sql);
	
	$res=mysql_query($sql);
	echo("<script>alert('Data Updated')</script>");
	
	
}
mysql_close($con);	
?>

</body>
</html>