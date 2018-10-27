


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<?php
include("db connect.php");
?>
</head>

<body>
<table width="100%" height="181%" border="0">
  <tr>
    <td height="101" colspan="3" bgcolor="#FF0000"><img src="photo.jpg.jpg" width="20%" height="115%"  alt=""/></td>
  </tr>
 
    <form action="modify_hos.php" method="post" name="f1">
<table width="50%" border="0" align="center">
  <tr>
    <td><input name="mail" type="text" id="name" placeholder="Enter Hospital E-Mail" size="30"  /></td>
    <td><input type="submit" name="button" id="button" value="Search" /></td>
  </tr>
</table>

</form>
<?php
@$sqlSelect="select * from hospital where email='".@$_REQUEST["mail"]."' and isactive=1";



@$resultSelect=mysql_query(@$sqlSelect);
if(@$rowSelect=mysql_fetch_array(@$resultSelect))
{

?>

<form action="modify_hos1.php" method="post" enctype="multipart/form-data" form="f2">
      <table width="50%" border="0">
        <tr>
          <td> Name</td>
          <td><input type="text" name="name" id="name" value="<?php echo($rowSelect["name"]) ?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>E- Mail</td>
          <td><input type="email" name="mail" id="mail" value="<?php echo($rowSelect["email"]) ?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="pass" id="textfield3" value="<?php echo($rowSelect["pass"]) ?> " >
          
         
         </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>City</td>
       <td><textarea name="city" id="textarea" cols="15" rows="5">
       <?php echo($rowSelect["city"]) ?> 
       </textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Address</td>
         <td><textarea name="add" id="textarea" cols="15" rows="5">
       <?php echo($rowSelect["address"]) ?> 
       </textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
          <tr>
          <td>Phone</td>
          <td><input type="text" name="ph"  value="<?php echo($rowSelect["phone"]) ?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Mobile</td>
          <td><input type="text" name="mob"  value="<?php echo($rowSelect["mobile"]) ?>"></td>
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
