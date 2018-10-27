<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>HaYah</title>
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
    <form action="add_hos1.php" method="post" >
    <table width="100%" border="0">
  <tr>
    <td width="17%" height="31">Name:</td>
    <td width="83%"><input type="text" name="name" id="textfield" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="35">E- Mail:</td>
    <td><input type="email" name="mail" id="textfield2" /></td>
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
    <td><textarea name="city" id="textarea" cols="15" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><textarea name="add" id="textarea" cols="15" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phone:</td>
    <td><input type="text" name="ph" id="textfield4" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Mobile:</td>
    <td><input type="text" name="mob" id="textfield4" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Is Active :</td>
    <td><input type="radio" name="ac" id="radio" value="0" checked="checked" /> Yes
    <input type="radio" name="ac" id="radio" value="1"  /> No</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Is Admin:</td>
    <td><input type="radio" name="ia" id="radio" value="0" checked="checked" /> Yes
    <input type="radio" name="ia" id="radio" value="1"  /> No</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Is Approve:</td>
    <td><input type="radio" name="iap" id="radio" value="0" checked="checked" /> Yes
    <input type="radio" name="ac" id="iap" value="1"  /> No</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input name="button" type="submit" value="Add" /></td>
    <td><input type="reset" value="Cancel" /></td>
  </tr>

 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td height="21"> &copy; HaYah</td>
    <td></td>
  </tr>
</table>

        </form>
</body>
</html>
