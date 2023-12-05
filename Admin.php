

<?php
include("dbconnect.php");
extract($_POST);
session_start();
if(isset($_POST['btn']))
{
$qry=mysql_query("select * from admin where name='$uname' && psw='$password'");
$num=mysql_num_rows($qry);
if($num==1)
{
echo "<script>alert('Login Successfull');</script>";
header("location:adminhome.php");
}
else
{
echo "<script>alert('Login UnSuccessfull');</script>";
}
}
?>
