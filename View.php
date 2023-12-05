
<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uid=$_SESSION['id'];
?>

<body>
<table width="95%" border="1" align="center" bordercolor="#001a33">
  <p>&nbsp;</p>
  <table width="95%" border="0" align="center">
    <tr>
      <td align="center"><p><strong>House Rental</strong>:</p>
        <table width="90%" border="0" align="center">
          <tr>
            <td>&nbsp;&nbsp;
           <img src="images\1.jpg" width="1340" height="200"/>
          </tr>
        </table>
      <p>&nbsp; </p></td>
    </tr>
  </table>
<table width="100%" align="center">
	<tr>
		<td colspan="10">&nbsp;</td>
	  </tr>
		<tr>
		<td colspan="10" align="center">House Booking Details</td>
	  </tr>
		
		<tr>
		<td colspan="10">&nbsp;</td>
	  </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from hregist where uid='$uid'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$status=$row['status'];	
		?>
        <tr>
		 <td width="5%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['oname'];?></div></td>
		    <td><div align="center"><?php echo $row['loc'];?></div></td>
			 <td><div align="center"><?php echo $row['address'];?></div></td>
			   <td><div align="center"><?php echo $row['rtype'];?></div></td>
			    <td><div align="center"><?php if($status==1)
				 {
			 echo "Your Request Sent To the Owner";
		 }  
		 else
	{
echo "Owner Accept Your Request";
		 }
	 ?>
        </tr>
	
<?php
}
?>
	<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>	
</table>
<br />
<br />
<br />
<table width="95%" border="1" align="center" bordercolor="#001a33">
  <tr>
    <td height="80" valign="center" bgcolor="#001a33" align="center"><p class="style1">Copyright2019@House Rental</p></td>
  </tr>
</table>
</body>
</html>

