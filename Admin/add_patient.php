
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Admin Of HaYah</title>
<?php
include("db connect.php");
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
    <form action="add_patient1.php" method="post" >
    <table width="100%" border="0">
  <tr>
    <td width="18%">First Name :</td>
    <td width="82%">
      <input type="text" name="fn" id="textfield" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="lna" id="textfield2" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>E Mail:</td>
    <td><input type="email" name="email" id="textfield2" /></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td>Password:</td>
    <td><input type="password" name="pass" id="textfield3" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>City:</td>
    <td><textarea name="city" id="textarea" cols="10" rows="3"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><textarea name="add" id="textarea" cols="10" rows="3"></textarea></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Phone:</td>
    <td><input type="text" name="ph" id="textfield4" /></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Mobile:</td>
    <td><input type="text" name="mob" id="textfield4" /></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Gender:</td>
    <td><input type="radio" name="gender" id="radio" value="0"  checked="checked"/> Male
    </br>
      <input type="radio" name="gender" id="radio2" value="1" />  Female</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Date Of Birth:</td>
    <td><input type="date" name="dob" id="textfield4" /></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Is Patient: </td>
    <td><input type="radio" name="ip" id="radio" value="1"  checked="checked"/> Yes
    </br>
      <input type="radio" name="ip" id="radio2" value="0" /> No
      <textarea   placeholder="Write What You Are Suffer From" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Is Donnator:</td>
    <td><input type="radio" name="id" id="radio" value="1"  checked="checked"/> Yes
    </br>
      <input type="radio" name="id" id="radio2" value="0" /> No</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Is Approve:</td>
    <td><input type="radio" name="ipp" id="radio" value="1"  checked="checked"/>Yes
    </br>
      <input type="radio" name="ipp" id="radio2" value="0" /> No</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Is Admin:</td>
    <td><input type="radio" name="ia" id="radio"   value="1"checked="checked"/> yes 
    </br>
      <input type="radio" name="ia" id="radio2"   value="0"/> No</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Is Active:</td>
    <td><input type="radio" name="acc" id="radio" value="1" checked="checked"/> yes  
    </br>
      <input type="radio" name="acc" id="radio2"  value="0" /> no </td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Blood Type:</td>
    <td><select name="bt" id="bd">
      <option value="0">--choose--</option>
      <option value="1">A</option>
      <option value="2">B</option>
      <option value="3">O</option>
      <option value="4">AB</option>
    </select></td>
  </tr>
  <tr>
    <td height="30"><input type="submit" name="button" id="button" value="Add" /></td>
    <td><input type="reset" name="button2" id="button2" value="Cancel" /></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&copy; HaYah</td>
    <td>&nbsp;</td>
  </tr>
    </table>

    </form>
    <?php
	mysql_close($con);
	?>
</body>
</html>
