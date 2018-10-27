<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die(mysql_error());
}
$db=mysql_select_db("bloodbank");
if(!$db)
{
	die(mysql_error());
}
?>
</head>

<body>
<?php
$un=$_REQUEST["un"];
$pass=$_REQUEST["pass"];
if($un == "" | $pass == "" )
{
	echo("<script>alert(' Enter User Name Or Password')</script>");
	
}
else
{
	$sql= "select * from patient  where email='".$un."' and pass ='".$pass."' ";
//	echo($sql);
	

	$res=mysql_query($sql);
	if($row = mysql_fetch_array($res))
	{
		if($row["isadmin"] == 1)
		{
		header ("location:http://localhost/blood%20bank/admin/admin_control.php");
	}
	else
	{
		header ("location:http://localhost/blood%20bank/member/member.php");
	}
}
mysql_close($con);

}
?>
</body>
</html>