<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Hayah</title>

</head>

<body>
<?php
if($_REQUEST["fn"] == "")
{
	echo("<script>alert('Please Enter First Name')</script>");
}
else
{
	if($_REQUEST["lna"] == "")
	{
	echo("<script>alert('Please Enter Last Name')</script>");
	}
	else
	{
		if($_REQUEST["pass"] !=  $_REQUEST["cpass"])
		{
				echo("<script>alert('Please Write Password Correctly')</script>");

		}
		else
		{
			if($_REQUEST["em"] == "")
			{
					echo("<script>alert('Please Enter E Mail')</script>");

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
					if($_REQUEST["bt"] == 0)
					{
							echo("<script>alert('Please Choose Blood Type')</script>");

					}
					else
					{ 
							
				include("db connect.php");
	
	$sql="select * from patient where email='".$_REQUEST["em"]."'";
	$res=mysql_query($sql);
	
	if($row=mysql_fetch_array($res))
	{
		echo("<script>alert('User Exist')</script>");
	}
	else
	{ 
		              $gender=0;
		             if($_REQUEST["gender"] == 1)
		             {
			         $gender=1;
		               }
					  
	
		$ip=0;
		if($_REQUEST["ip"] == 1)
		{
			$ip=1;
		}
		
			$don=0;
		if($_REQUEST["don"] == 1)
		{
			$don=1;
		}
		


	
      $sqlInsert="insert into patient(fn,lna,pass,city,address,phone,mobile,
gender,bid,dateofbirth,ispatient,employeeid,email,did,callsid,donnator,isadmin,isapproval,isactive)
values('".trim($_REQUEST["fn"])."','".trim($_REQUEST["lna"])."','".trim($_REQUEST["pass"])."','".trim($_REQUEST["city"])."',
'".trim($_REQUEST["add"])."','".trim($_REQUEST["ph"])."','".trim($_REQUEST["mob"])."',".$gender.",0,
".$_REQUEST["dob"].",".$ip.",0,'".trim($_REQUEST["em"])."',0,0,".$don.",0,0,0)";


		$res1=mysql_query($sqlInsert);
	echo("<script>alert('It Is Done')</script>"); 
		//echo($sqlInsert);
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

?>

</body>
</html>



