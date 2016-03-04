<?php

	
	mysql_connect("localhost","root","");
	mysql_select_db("doctor_appointment");
	
	$vuname=$_REQUEST['USERNAME'];
	$vpwd=$_REQUEST['PASSWORD'];
	
   	$SQL = "SELECT  * FROM 'doctorreg' WHERE USERNAME='".$vuname."' AND PASSWORD='".$vpwd."' ";   
	$RES = mysql_query($SQL); 
	  if (mysql_num_rows($RES) > 0)
	{
		echo "Login Success";
	}
	else
 	{
  		echo "false";
	}
	
	
?>
