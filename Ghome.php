
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$oname=$_SESSION['oname'];
	if(isset($_POST['btn']))
	{
	$max_qry = mysql_query("select max(id) from hregist");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
	$qry=mysql_query("insert into hregist values('$id','$oname','$loc','$address','$zip','$htype','$noh','$rtype','$hfor','$rms','$amnt','$himg','$dur','0','$uid')");
		if($qry)
		{
		echo"<script> alert('Registerd sucessfully')</script>";
		}
		else
		{
		echo "<script> alert('Enter the fields correctly')</script>";
		}
		}
?>
