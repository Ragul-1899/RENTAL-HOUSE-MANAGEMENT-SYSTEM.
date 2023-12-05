
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
//checking name
$qry=mysql_query("insert into gregister(name,gender,age,email,phone,address,zip,uname,psw) values('$name','$gender','$age','$email','$phone','$address','$zip','$uname','$psw')");
	if($qry)
	{
	echo "<script>alert('inserted sucessfully')</script>";
	}
	else
	{
echo "failed";
	
}
}
?>
