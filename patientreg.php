<?php

	
	mysql_connect("localhost","root","");
	mysql_select_db("doctor_appointment");
	
	$patient_name=$_REQUEST['PATIENT_NAME'];
	$age=$_REQUEST['AGE'];
        $gender=$_REQUEST['GENDER'];
	$username=$_REQUEST['USERNAME'];
        $pwd=$_REQUEST['PASSWORD'];
	$confirm_pwd=$_REQUEST['CONFIRM_PWD'];
	$ph_no=$_REQUEST['PHONE_NO'];
	$email=$_REQUEST['EMAILID'];
	$address=$_REQUEST['ADDRESS'];
	
    $SQL = "INSERT INTO 'patientreg'('PATIENT_NAME','AGE','GENDER','USERNAME','PASSWORD','CONFIRM_PWD','PHONE_NO','EMAILID','ADDRESS') VALUES ('".$patient_name."','".$age."','".$gender."','".$username."','".$pwd."','".$confirm_pwd."','".$ph_no."','".$email."','".$address."')";   
	$RES = mysql_query($SQL); 
	  
	
	
?>
