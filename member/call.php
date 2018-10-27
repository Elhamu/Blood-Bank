<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Call</title>
<?php
include("db connect.php");

$sql="select Id,name from hospital where isactive=1";
?>
</head>

<body>

<table width="100%" border="0">
<form name="f1" action="call1.php">
  <tr>
    <td height="101" colspan="3" bgcolor="#FF0000"><img src="photo.jpg.jpg" width="20%" height="115%"  alt=""/></td>
  </tr>
  <tr>
    <td>First Name:</td>
    <td><input name="fn" type="text" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input name="ln" type="text" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>E-Mail:</td>
    <td><input name="email" type="email" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="25%">Are You Donnator:</td>
    <td width="75%">
      <input type="radio" name="don" id="radio" value="0" checked="checked"/>
      Yes    
      <input type="radio" name="don" id="radio2" value="1" />No
     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Are You Patient:</td>
    <td><input type="radio" name="ap" id="radio" value="0" checked="checked"/>
      Yes    
      <input type="radio" name="ap" id="radio2" value="1" />No</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Address:</td>
    <td>
    <textarea name="add" id="textarea" cols="15" rows="5"></textarea></td>
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
    <td>Litres:</td>
    <td>    <input type="text" name="litres" id="textfield" /></td>
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
    <td>&copy; HaYah</td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>

</body>
</html>
