
<?php
session_start();
include("dbconnect.php");
extract($_POST);
echo $oname=$_SESSION['oname'];

if($_REQUEST["act"]==('add'))
{
$hid=$_REQUEST['hid'];
$qt=mysql_query("update hregist set status='0' where hid='$hid'");
echo"Status Cleared";

}

?>
		<?php
		$qry=mysql_query("select * from hregist where oname='$oname' && status='2'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$uid=$row['uid'];
		$qry1=mysql_query("select * from register where id='$uid'");
		$row1=mysql_fetch_array($qry1);
		$status=$row['status'];	
		?>
        <tr>
		 <td width="5%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['oname'];?></div></td>
		    <td><div align="center"><?php echo $row['loc'];?></div></td>
			 <td><div align="center"><?php echo $row['address'];?></div></td>
			   <td><div align="center"><?php echo $row['rtype'];?></div></td>
			    <td><div align="center"><?php echo $row1['name'];?></div></td>
				 <td><div align="center"><?php echo $row1['gender'];?></div></td>
				  <td><div align="center"><?php echo $row1['email'];?></div></td>
				   <td><div align="center"><?php echo $row1['phone'];?></div></td>
			    <td><div align="center"><a href="viewc.php?act=del&hid=<?php echo $row['id'];?>">Cancel User</a></div></td>
        </tr>
		<?php
		}
		?>
