<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>

</head>

<body>
<?php
if($_REQUEST["add"] == "")
			{
				echo("<script>alert('Please Enter Address')</script>");
			}
			
			else
			{
			
			if($_REQUEST["hospital"] == 0)
			{
								echo("<script>alert('Please Enter Hospital')</script>");
			}
			else
			{
			
			
			
			if($_REQUEST["litres"] == "")
			{
								echo("<script>alert('Please Enter Litres')</script>");
			}
				else
			{
			
			
			
			if($_REQUEST["email"] == "")
			{
								echo("<script>alert('Please Enter E-Mail')</script>");
			}

				else
			{
			
			
			
			if($_REQUEST["fn"] == "")
			{
								echo("<script>alert('Please Enter First Name')</script>");
			}

				else
			{
			
			
			
			if($_REQUEST["ln"] == "")
			{
								echo("<script>alert('Please Enter Last Name')</script>");
			}
		
						else
						
						{
							include("db connect.php");
							$don=0;
							if($_REQUEST["don"] ==1)
							{
								$don=1;
							}
							
							$ap=0;
							if($_REQUEST["ap"] ==1)
							{
								$ap=1;
							}
							$sqlInsert="insert into calls (address,patient,hospital,litres,donator,fn,ln,mail)
	values('".$_REQUEST["add"]."',".$ap.",'".$_REQUEST["hospital"]."','".$_REQUEST["litres"]."', ".$don.",'".$_REQUEST["fn"]."','".$_REQUEST["ln"]."','".$_REQUEST["email"]."')";
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
		
?>
			
			
			
			
			
            
</body>
</html>
