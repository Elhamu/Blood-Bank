

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php
include("db connect.php");


$sql="select Id,name from hospital";



?>

</head>

<body>
<table width="100%" height="181%" border="0">
  <tr>
    <td height="101" colspan="3" bgcolor="#FF0000"><img src="photo.jpg.jpg" width="20%" height="115%"  alt=""/></td>
  </tr>

<form action="modify_emplo.php" method="post" name="f1">
<table width="50%" border="0" align="center">
  <tr>
    <td><input name="mail" type="email"  placeholder="Enter Employee E-Mail" size="30"  /></td>
    <td><input type="submit" name="button" id="button" value="Search" /></td>
  </tr>
</table>

</form>
<?php
@$sqlSelect="select * from employee where email='".@$_REQUEST["mail"]."' and isactive=1";

//echo($sqlSelect);

@$resultSelect=mysql_query(@$sqlSelect);
if(@$rowSelect=mysql_fetch_array(@$resultSelect))
{

?>

<form action="modify_emplo1.php" method="post" enctype="multipart/form-data" form="f2">
      <table width="50%" border="0">
        <tr>
          <td>First Name</td>
          <td><input type="text" name="fn" id="fn" value="<?php echo($rowSelect["fn"]); ?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Last Name</td>
          <td><input type="text" name="ln" id="ln" value="<?php echo($rowSelect["ln"]); ?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="mail" id="email" value="<?php echo($rowSelect["email"]); ?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
         <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>Password</td>
          <td><input type="password" name="pass" id="pass" value="<?php echo($rowSelect["pass"]); ?>"></td>
       </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
          <tr>
          <td>Phone</td>
          <td><input type="text" name="ph" id="phone" value="<?php echo($rowSelect["phone"]); ?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Mobile</td>
          <td><input type="text" name="mobile" id="mob" value="<?php echo($rowSelect["mob"]); ?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Address</td>
          <td><textarea name="add" rows="4" id="address">
          
         <?php echo($rowSelect["address"]); ?> 
          </textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>gender</td>
          <td>
          <?php
          if($rowSelect["gender"] == 0)
		  {
          echo("<input name='gender' type='radio' id='radio' value='0' checked>Male");
		  
		  echo("<input type='radio' name='gender' id='radio2' value='1'>
            Female");
		  }
		  else
		  {
			   echo("<input name='gender' type='radio' id='radio' value='0' >Male");
         echo("<input type='radio' name='gender' id='radio2' value='1' checked>
            Female");
            
		  }
		  
		  
		    
            ?>
            
            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
       
     
        <tr>
          <td>Hospital</td>
          <td>
          <select name="hospital" >
          <option value="0">--choose--</option>
          <?php
		  
		  	$res=mysql_query($sql);
		  while($row=mysql_fetch_array($res))
		  {
			  
			  if($row["Id"] == $rowSelect["Id"])
			  {
	echo("<option value='".$row["Id"]."' selected >".$row["name"]."</option>")  ;
			  }
			  else
			  {
				  			echo("<option value='".$row["Id"]."'>".$row["name"]."</option>")  ;
			  }
			 
		  }
?>
          </select>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td>
          
          <?php
		 
          if($rowSelect["isactive"] == 1)
          {
          
       echo("<input type='checkbox' name='act' value='active' checked='checked' />
            Activation");
		  }
		  else
		  {
			    echo("<input type='checkbox' name='act' value='active' / >
            Activation");
		  }
            
            ?>
            
            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
          
           <?php
		
          if($rowSelect["isapprove"] ==1)
          {
          
       echo("<input type='checkbox' name='app' value='approv' checked='checked'>
            Approval");
		  }
		  else
		  {
			  echo("<input type='checkbox' name='app' value='approv' >
            Approval");
		  }
            
            ?>
          
         
            
            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
          
          
           <?php
		
          if($rowSelect["isadmin"] ==1)
          {
          
       echo("<input type='checkbox' name='ia' value='isAdmin' checked='checked'>
            Is Admin");
		  }
		  else
		  {
			  echo("<input type='checkbox' name='ia' value='isAdmin'>
            Is Admin");
		  }
            
            ?>

            </td>
        </tr>
     
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Update">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="del" id="del" value="Delete"></td>
        </tr>
      </table>
      </form>
    
     
      <?php
}
mysql_close($con);
?>
    
    
    
</body>
</html>