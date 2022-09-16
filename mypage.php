<?php
$connect=mysqli_connect("localhost","root","","mytest");
$id=$_GET['id'];
$upd=mysqli_query($connect,"update tbl_status set status='1' where id='$id' ");

if($upd){
	echo"<script>alert('your account is activated');</script>";
	echo"<script>window.location.assign('file1.php');</script>";	
}
else{
	echo"<script>alert('your account can't be activated');</script>";
	
	
}

?>