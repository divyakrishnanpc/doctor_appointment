<?php
	mysql_connect("localhost","root","");
	mysql_select_db("doctor_appointment");
	
	$pname=$_REQUEST['PATIENT_NAME'];
	$page=$_REQUEST['AGE'];
	$pgender=$_REQUEST['GENDER'];
        $pusername=$_REQUEST['USERNAME'];
        $ppass=$_REQUEST['PASSWORD'];
	$pconpass=$_REQUEST['CONFIRM_PWD'];
	$pphno=$_REQUEST['PHONE_NO'];
	$pemail=$_REQUEST['EMAIL_ID'];
	$paddress=$_REQUEST['ADDRESS'];
	
$SQL = "INSERT INTO `patientreg`(`PATIENT_NAME`,`AGE`,`GENDER`,`USERNAME`,`PASSWORD`,`CONFIRM_PWD`,`PHONE_NO`,`EMAIL_ID`,`ADDRESS`) VALUES ('".$pname."','".$page."','".$pgender."','".$pusername."','".$ppass."',''".$pconpass."','".$pphno."','".$pemail."','".$paddress."')";   
	$RES = mysql_query($SQL); 
$sql1 = "select id from patientreg where PATIENT_NAME='".$pname."' ";

$result=mysql_query($sql1);
while ($row = mysql_fetch_array($result))
{
	$r=$row['id']; 


}
echo $r;
	  
	
	
?>
