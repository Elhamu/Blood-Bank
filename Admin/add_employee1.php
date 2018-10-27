
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
	if($_REQUEST["ln"] == "")
{
	echo("<script>alert('Please Enter Last Name ')</script>");
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
						$sql="select * from employee where email ='".$_REQUEST["mail"]."'";
						$res=mysql_query($sql);
						if($row=mysql_fetch_array($res))
						{
							echo("<script>alert('User exist')</script>");
						}
						else
						{
							$acc=0;
							if($_REQUEST["acc"] ==1)
							{
								$acc=1;
							
							}
							$gender=0;
							if($_REQUEST["gender"] ==1)
							{
								$gender=1;
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
	$sqlInsert="insert into employee (fn,phone,hospitalid,gender,patientid,email,ln,pass,mob,address,isadmin,isactive,isapprove)
	values('".$_REQUEST["fn"]."','".$_REQUEST["ph"]."',NULL,".$gender.",0,'".$_REQUEST["mail"]."','".$_REQUEST["ln"]."', '".$_REQUEST["pass"]."','".$_REQUEST["mob"]."','".$_REQUEST["add"]."',".$ia.",".$acc."
,".$iap.")";
//echo($sqlInsert);

		 $res1=mysql_query($sqlInsert);
	echo("<script>alert('Employee Is Inserted')</script>");
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
