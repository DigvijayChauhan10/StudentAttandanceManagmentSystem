<?php
$srl = $_POST['oroll'];
$sd=$_POST['udate'];
$sas = $_POST['atsta'];
$conn = mysqli_connect("localhost", "root", "", "sams") or die("Connection Failed.");
$sql = "UPDATE st_$srl SET satst='{$sas}' WHERE sada='$sd'";
$result = mysqli_query($conn, $sql) or die("Query Un");
header("Location: http://localhost/SAMS/index.php");
mysqli_close($conn);
?>
