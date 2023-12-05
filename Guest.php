

<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysql_query("select * from gregister where uname='$uname' && psw='$password'");
$num=mysql_num_rows($qry);
if($num==1)
{
$qry=mysql_query("select * from gregister where uname='$uname' && psw='$password'");
$row=mysql_fetch_assoc($qry);
$_SESSION['oname']=$row['name'];
echo "<script>alert('Login sucess')</script>";
header("location:ghome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}
}
?> 
