



<table border="2" width="500px">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Status</th>
</tr>

<?php
$connect=mysqli_connect("localhost","root","","mytest");
$select=mysqli_query($connect,"select * from tbl_status ");
$num=mysqli_num_rows($select);

for($i=0; $i<$num; $i++){
	$row=mysqli_fetch_array($select);
	echo"<tr>";
	echo"<td>".$row[0]."</td>";
	echo"<td>".$row[1]."</td>";
	echo"<td>".$row[2]."</td>";
	//status  of activate we show data to visiter
	if($row[3]==1){
	echo"<td>".'<a href="delete.php?id='.$row[0].'">Activate</a>'."</td>";
	}
	else{
		//status deactivate we have data in database but its delete from visiter
	echo"<td>".'<a href="mypage.php?id='.$row[0].'">Deactivate</a>'."</td>";
	}
	echo"</tr>";
	
}

?>
</table>