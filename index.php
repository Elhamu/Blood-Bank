<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>HaYah</title>
<?php
include("db connect.php");
?>
<style type="text/css">
#reset {	text-align: center;
}
</style>
</head>


<body>
<table width="100%" height="181%" border="0">
  <tr>
    <td height="101" colspan="3" bgcolor="#FF0000"><img src="photo.jpg.jpg" width="20%" height="115%"  alt=""/></td>
  </tr>
  <tr>
    <td width="15%" height="649">&nbsp;</td>
    <td  width="100%" >
    <form action="login.php" method="post">
      <table width="50%"   border="0">
        <tr>
          <td>User Name :</td>
          <td><input type="text" name="un" id="un" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="pass" id="pw" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="checkbox" name="checkbox" id="checkbox" />
            <label for="checkbox">Remember Me</label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" id="submit" value="Login" /></td>
          <td><input type="reset" name="reset" id="reset" value="Cancel" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="21"  id="reset"><a href="register.php">Sign Up</a></td>
     
     <td height="21" ><a href="member/why.php">  Donnation
 Of Blood </a></td>        </tr>
        
      </table>
    </form></td>
    <td width="17%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&copy; HaYah</td>
  </tr>
</table>
</body>
</html>