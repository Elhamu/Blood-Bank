<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HaYah</title>

<?php
include("db connect.php");
?>
</head>

<body>
<table width="100%" height="181%" border="0">
  <tr>
    <td height="101" colspan="3" bgcolor="red"><img src="photo.jpg.jpg" width="20%" height="155%"  alt=""/>ا</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="15%" height="649">&nbsp;</td>
    <td  width="67%" >
    
       <form action="reg.php" method="post" >
        <table width="50%" border="0">
        
  <tr>
    <td> First Name :</td>
    <td> <input name="fn" type="text" size="30" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> Last Name :</td>
    <td><input name="lna" type="text" size="30" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>E Mail :</td>
    <td><input type="email" name="em"</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>Password :</td>
    <td><input name="pass" type="password" size="30" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Confirm Password :</td>
    <td><input name="cpass" type="password" size="30" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>City :</td>
    <td><textarea name="city" cols="8" rows="3"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  
   <tr>
    <td>Address :</td>
    <td><textarea name="add" cols="8" rows="3"></textarea></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>phone</td>
    <td><input name="ph" type="text" size="30" maxlength="11" /></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td> Mobile :</td>
    <td><input name="mob" type="text" size="30" maxlength="11" /></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>Gender :</td>
    <td> <input name="gender" type="radio" value="0" checked="checked" /> Male  <input name="gender" type="radio" value="1"  /> Female
    </td>
    </tr>
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>Blood Type :</td>
    <td>  
 
            <select name="bt" id="bd">
              <option value="0">--choose--</option>
              <option value="1">A</option>
              <option value="2">B</option>
              <option value="3">O</option>
              <option value="4">AB</option>
              </select></td>
      
       </tr>
      
       <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

     <tr>
    <td height="94">Is Pateient :</td>
    <td> <input name="ip" type="radio" value="0" checked="checked" /> Yes <input name="ip" type="radio" value="1" />
  No   <br>
    <label for="textarea"></label>
    <textarea name="disease" placeholder="Enter Your Disease" id="textarea"></textarea></td>
  </tr>
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
      <tr>
    <td>Is Donnator :</td>
    <td> <input name="don" type="radio" value="0" checked="checked" /> Yes <input name="don" type="radio" value="1" /> 
    No </td>
  </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>    
    <tr>
    <td>Date Of Birth :</td>
    <td><input type="date" name="dob" </td>
  </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> 
          <tr>
            <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="register">
          <input type="Reset"  id="button" value="Cancel">

      </tr>
      </table>
      </form>
     </td>
    <td width="18%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&copy; HaYah </td>
  </tr>
</table>

</body>
</html>
