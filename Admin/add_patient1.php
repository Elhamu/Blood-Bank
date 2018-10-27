
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

</head>

<body>
<?php
if($_REQUEST["fn"] == "")
{ 
echo("<script>alert('Please Enter First Name ')</script>");
}
else
{
	if($_REQUEST["lna"] == "")
{ 
echo("<script>alert('Please Enter Last Name ')</script>");
}
else
{
	if($_REQUEST["email"] == "")
{ 
echo("<script>alert('Please E mail ')</script>");
}
else
{
	if($_REQUEST["pass"] == "")
{ 
echo("<script>alert('Please password ')</script>");
}
else
{
	if($_REQUEST["city"] == "")
{ 
echo("<script>alert('Please city ')</script>");
}
else
{
	if($_REQUEST["add"] == "")
{ 
echo("<script>alert('Please Address ')</script>");
}
else
{
	if($_REQUEST["ph"] == "")
{ 
echo("<script>alert('Please Phone ')</script>");
}
else
{
	if($_REQUEST["mob"] == "")
{ 
echo("<script>alert('Please Mobile ')</script>");
}
else
{
	if($_REQUEST["dob"] == "")
{ 
echo("<script>alert('Please Date Of Birth ')</script>");
}
else
{
	if($_REQUEST["bt"] == 0)
{
	echo("<script>alert('please Choose Blood Type')</script>");
	
}
else
{
	include("db connect.php");
	$sql= "select * from patient where email ='".$_REQUEST["email"]."'";
	$res=mysql_query($sql);
	if($row= mysql_fetch_array($res))
	{
		echo("<script>alert('User Exist') </script>");
	}
	else
	{
		$gender=0;
		if($_REQUEST["gender"] == 1)
		{
			$gender =1;
		}
		$ip=1;
		if($_REQUEST["ip"] == 0)
		{
			$ip=0;
		}
		$id=1;
		if($_REQUEST["id"] == 0)
		{
			$id=0;
		}
		$ipp=1;
		if($_REQUEST["ipp"] == 0)
		{
			$ipp=0;
		}
		$ia=1;
		if($_REQUEST["ia"] == 0)
		{
			$ia=0;
		}
		$acc=1;
		if($_REQUEST["acc"] == 0)
		{
			$acc=0;
		}
		     $sqlInsert="insert into patient(fn,lna,pass,city,address,phone,mobile,
gender,bid,dateofbirth,ispatient,employeeid,email,did,callsid,donnator,isadmin,isapproval,isactive)
values('".trim($_REQUEST["fn"])."','".trim($_REQUEST["lna"])."','".trim($_REQUEST["pass"])."','".trim($_REQUEST["city"])."',
'".trim($_REQUEST["add"])."','".trim($_REQUEST["ph"])."','".trim($_REQUEST["mob"])."',".$gender.",0,
".$_REQUEST["dob"].",".$ip.",0,'".trim($_REQUEST["email"])."',0,0,".$id.",".$ia.",".$ipp.",".$acc.")";
$res1=mysql_query($sqlInsert);
//echo($sqlInsert);
echo("<script>alert('It is Done')</script>");
	}
	mysql_close($con);
}
}
}
}
}
}
}
}
}
}

?>
</body>
</html>
