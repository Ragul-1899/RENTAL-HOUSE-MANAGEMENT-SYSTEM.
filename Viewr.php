

<?php
session_start();
include("dbconnect.php");
extract($_POST);
echo $oname=$_SESSION['oname'];

if($_REQUEST["act"]==('add'))
{
$hid=$_REQUEST['hid'];
$qt=mysql_query("update hregist set status='2' where id='$hid'");
echo"Accepted Sucess Fully";
}
?>
