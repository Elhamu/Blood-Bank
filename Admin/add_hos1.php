
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

</head>

<body>
<?php
if($_REQUEST["name"] == "")
{
	echo("<script>alert('Please Enter Name Of Hospital')</script>");
}
else
{
	if($_REQUEST["mail"] == "")
	{
		echo("<script>alert('Please Enter E-mail')</script>");
	}
	else
	{
		if($_REQUEST["pass"] == "")
	{
		echo("<script>alert('Please Enter Password')</script>");
	}
	else
	{
		if($_REQUEST["city"] == "")
		{
			echo("<script>alert('Please Enter City')</script>");
		}
		else
		{
			if($_REQUEST["add"] == "")
			{
				echo("<script>alert('Please Enter Address')</script>");
			}
			else
			{
				if($_REQUEST["ph"] == "")
				{
					echo("<script>alert('Please Enter Phone')</script>");
				}
				else
				{
					if($_REQUEST["mob"] == "")
					{
						echo("<script>alert('Please Enter Mobile')</script>");
					}
					else
					{
						include("db connect.php");
						$sql="select * from hospital where email ='".$_REQUEST["mail"]."'";
						$res=mysql_query($sql);
						if($row= mysql_fetch_array($res))
						{
							echo("<script>alert('Hospital exist')</script>");
						}
						else
						{
							$ac=0;
							if($_REQUEST["ac"] ==1)
							{
								$ac=1;
							
							}
							$ia=0;
							if($_REQUEST["ia"] == 1)
							{
								$ia=1;
							}
							$iap=0;
							if($_REQUEST["iap"] == 1)
							{
								$iap=1;
							}
	$sqlInsert="insert into hospital (name,address,city,patientid,employeeid,phone,email,pass,isactive,isadmin,isapprove,mobile)
	values('".$_REQUEST["name"]."','".$_REQUEST["add"]."','".$_REQUEST["city"]."', 0,0, '".$_REQUEST["ph"]."','".$_REQUEST["mail"]."','".$_REQUEST["pass"]."', ".$ac.",".$ia.",".$iap.",'".$_REQUEST["mob"]."')";
	$res1=mysql_query($sqlInsert);
	//echo($sqlInsert);
	echo("<script>alert('Hospital Is Inserted')</script>");
						}
						mysql_close($con);
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
