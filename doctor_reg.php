<?php

	
	mysql_connect("localhost","root","");
	mysql_select_db("doctor_appointment");
	
	$doctor_name=$_REQUEST['DOCTOR_NAME'];
	$username=$_REQUEST['USERNAME'];
        $password=$_REQUEST['PASSWORD'];
	$confirm_password=$_REQUEST['CONFIRM_PASSWORD'];
        $emailid=$_REQUEST['EMAILID'];
	$ph_no=$_REQUEST['PHONE_NUMBER'];
	$experience=$_REQUEST['EXPERIENCE'];
	$specialist=$_REQUEST['SPECIALIST'];
	
	
    $SQL = "INSERT INTO 'doctor_reg'('DOCTOR_NAME','USERNAME','PASSWORD','CONFIRM_PASSWORD','EMAILID','PHONE','EXPERIENCE','SPECIALIST') VALUES ('".$doctor_name."','".$username."','".$password."','".$confirm_password."','".$emailid."','".$ph_no."','".$experience."','".$specialist."')";   
	$RES = mysql_query($SQL); 
	  
	
	
?>
