
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid=$_SESSION['uid'];
	$oname=$_REQUEST['oname'];
	$hid=$_REQUEST['hid'];
	

	if($_REQUEST["act"]==('add'))
	{
	
	$hhid=$_REQUEST['hid'];
	$qry=mysql_query("update hregist set status='1',uid='$uid' where id='$hhid'");
	echo "<script>alert('House Booked')</script>";
	
	}

?>
<?php
$qr=mysql_query("select * from hregist where oname='$oname' && id='$hid'");
$rw=mysql_fetch_array($qr);
$hid1=$rw['id'];
$oname1=$rw['oname'];
?>
<tr>
<td>&nbsp;</td>
<td align="center"><img src="images/<?php echo $rw['himg'];?>" width="200" height="200"></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Owner Name</strong></td>
<td align="left"><?php echo $rw['oname'];?></td>
<td>&nbsp;</td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Location</strong></td>
<td align="left"><?php echo $rw['loc'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Address</strong></td>
<td align="left"><?php echo $rw['address'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Rent type<strong></td>
<td align="left"><?php echo $rw['rtype'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Amount</strong></td>
<td align="left"><?php echo $rw['amnt'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Number of rooms</strong></td>
<td align="left"><?php echo $rw['rms'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center"><a href="uview.php?act=add&oname=<?php echo $rw['oname'];?>&hid=<?php echo $rw['id'];?>">Book</a></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<table width="95%" border="1" align="center" bordercolor="#001a33">
  <tr>
    <td height="80" valign="center" bgcolor="#001a33" align="center"><p class="style1">Copyright2019@House Rental</p></td>
  </tr>
</table>
</body>
</html>
