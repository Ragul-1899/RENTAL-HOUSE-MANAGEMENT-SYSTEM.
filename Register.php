

<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{

$qry=mysql_query("insert into register(name,gender,age,email,phone,address,uname,psw) values('$name','$gender','$age','$email','$phone','$address','$uname','$psw')");
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
