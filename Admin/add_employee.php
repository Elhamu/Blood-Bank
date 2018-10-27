
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title> HaYah</title>
<?php


include("db connect.php");

$sql="select Id,name from hospital where isactive=1";
?>
</head>

<body>
<table width="100%" height="181%" border="0">
  <tr>
    <td height="101" colspan="3" bgcolor="#FF0000"><img src="photo.jpg.jpg" width="20%" height="115%"  alt=""/></td>
  </tr>
  <tr>
    <td width="15%" height="649">&nbsp;</td>
    <td  width="100%" >
    <form action="add_employee1.php" method="post" >
    <table width="100%" border="0">
  <tr>
    <td width="16%">First Name:</td>
    <td width="84%"><input type="text" name="fn" id="textfield" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="ln" id="textfield2" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>E-Mail:</td>
    <td><input type="email" name="mail" id="textfield3" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" name="pass" id="textfield4" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Mobile:</td>
    <td><input type="text" name="mob" id="textfield5" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phone:</td>
    <td><input type="text" name="ph" id="textfield6" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
     <tr>
          <td>Address</td>
          <td><textarea name="add" rows="4" id="add"></textarea></td>
        </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Gender:</td>
    <td><input type="radio" name="gender" id="radio" value="0" checked="checked" /> Male
    <input name="gender" type="radio" value="1" /> Female
 </td> </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Is Admin:</td>
    <td><input type="radio" name="ia" id="radio2" 
   value="0"  checked/> 
      Yes
        <input type="radio" name="ia" id="radio3" value="1" /> No</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Is Active:</td>
    <td><input type="radio" name="acc" id="radio4" value="0"  checked="checked"/> Yes
      <input type="radio" name="radio5" id="radio5" value="1" /> No</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>Is Approve: </td>
    <td> <input type="radio" name="iap" id="radio4" value="0"  checked="checked"/> Yes
      <input type="radio" name="iap" id="radio5" value="1" /> No</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
        <tr>
          <td>Hospital:</td>
          <td>
            <select name="hospital" >
              <option value="0">--choose--</option>
              <?php
		/* while($row=mysql_fetch_array($res))
		  {
			echo(" <option value='".$row["SId"]."'>".$row["Sname"]."</option>")  ;
		  }*/
		  
		  include("general function.php");
		  
		  fillSelect($sql,"Id","name");
		  ?>
              
              
            </select></td>
        </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Add" /></td>
    <td><input type="reset" name="button2" id="button2" value="Cancel" /></td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&copy; HaYah</td>
    <td>&nbsp;</td>
  </tr>

</table>

    
    </form>
</body>
</html>
