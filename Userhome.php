
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	echo $uid=$_SESSION['uid'];
?>
		<?php
		$qry=mysql_query("select * from hregist where loc='$loc' &&  status='0'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
				
		?>
        <tr>
		<td>&nbsp;</td>
		 <td><div align="center"><?php echo $row['id'];;?></div></td>
		   <td><div align="center"><?php echo $row['loc'];?></div></td>
		   <td><div align="center"><?php echo $row['address'];?></div></td>
		   <td><div align="center"><?php echo $row['htype'];?></div></td>
		   <td><div align="center"><?php echo $row['hfor'];?></div></td>
		    <td><div align="center"><?php echo $row['rtype']; ;?></div></td>
		  <td><div align="center"><a href="uview.php?oname=<?php echo $row['oname'];?>&hid=<?php echo $row['id'];?>">House Details</a></div></td>
        </tr>
        <?php
		$i++;
		}
			?>
		</table>
<table width="95%" border="1" align="center" bordercolor="#001a33">
  <tr>
    <td height="80" valign="center" bgcolor="#001a33" align="center"><p class="style1">Copyright2019@House Rental</p></td>
  </tr>
</table>
</body>
</html>
