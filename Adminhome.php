

<?php
include("dbconnect.php");
session_start();
extract($_POST);
?>
		<?php
		$qry=mysql_query("select * from register");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>
        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['name'];?></div></td>
			  <td><div align="center"><?php echo $row['gender'];?></div></td>
			   <td><div align="center"><?php echo $row['age'];?></div></td>
				 <td><div align="center"><?php echo $row['email'];?></div></td>
				  <td><div align="center"><?php echo $row['phone'];?></div></td>
				   <td><div align="center"><?php echo $row['address'];?></div></td>
		
        <?php
		$i++;
		}
		?>
				<tr>

		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
