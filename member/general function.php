<?php
function fillselect($sql,$Id,$name)
{
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
		echo("<option  value='".$row[$Id]."'>".$row[$name]." </option>");
	}
		
}
?>